from flask import Flask, request, jsonify
import joblib

# Cargar el modelo y los mapeos
model = joblib.load("modelo_consumo.pkl")
category_mappings = joblib.load("category_mappings.pkl")

def preprocess_input(data):
    try:
        # Convertir categorías a números usando los mapeos
        inputs = [
            category_mappings["INSUMO"].get(data["INSUMO"], -1),  # -1 para valores desconocidos
            category_mappings["DÍA"].get(data.get("DÍA", -1), -1),
            category_mappings["MES"].get(data.get("MES", -1), -1),
            category_mappings["PLATO"].get(data.get("PLATO", -1), -1),
            data["DESPERDICIO"]
        ]

        # Validar si hay valores desconocidos
        if -1 in inputs[:4]:
            raise ValueError("Al menos una categoría no está reconocida en los datos.")

        return inputs

    except KeyError as e:
        raise ValueError(f"Falta un campo requerido: {e}")

# Predice la cantidad de un insumo para un mes específico y un desperdicio dado
def predecir_por_mes(insumo, mes, desperdicio=0.5):
    # Convertir insumo y mes en formato numérico
    insumo_cod = category_mappings["INSUMO"].get(insumo, -1)
    mes_cod = category_mappings["MES"].get(mes, -1)

    if insumo_cod == -1 or mes_cod == -1:
        raise ValueError("El insumo o el mes no están reconocidos.")

    # Crear el input para el modelo
    X = [[insumo_cod, -1, mes_cod, -1, desperdicio]]
    # Hacer la predicción
    prediccion = model.predict(X)[0]
    return prediccion

def predecir_insumo_total(insumo, desperdicio=0.5):
    # Convertir insumo en formato numérico
    insumo_cod = category_mappings["INSUMO"].get(insumo, -1)

    if insumo_cod == -1:
        raise ValueError("El insumo no está reconocido.")

    # Crear el input para el modelo
    X = [[insumo_cod, -1, -1, -1, desperdicio]]
    # Hacer la predicción
    prediccion = model.predict(X)[0]
    return prediccion

app = Flask(__name__)

@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Obtener datos JSON
        data = request.get_json()

        # Preprocesar la entrada
        inputs = preprocess_input(data)

        # Predecir
        prediction = model.predict([inputs])

        return jsonify({"prediction": float(prediction[0])})

    except ValueError as ve:
        return jsonify({"error": str(ve)}), 400
    except Exception as e:
        return jsonify({"error": str(e)}), 500

@app.route('/predict/month', methods=['POST'])
def predict_month():
    try:
        data = request.json
        insumo = data.get("insumo")
        mes = data.get("mes")
        desperdicio = data.get("desperdicio", 0.5)

        if not insumo or not mes:
            return jsonify({"error": "Debes proporcionar 'insumo' y 'mes'"}), 400

        prediccion = predecir_por_mes(insumo, mes, desperdicio)
        return jsonify({"insumo": insumo, "mes": mes, "cantidad_predicha": prediccion})
    except ValueError as ve:
        return jsonify({"error": str(ve)}), 400
    except Exception as e:
        return jsonify({"error": str(e)}), 500

@app.route('/predict/total', methods=['POST'])
def predict_total():
    try:
        data = request.json
        insumo = data.get("insumo")
        desperdicio = data.get("desperdicio", 0.5)

        if not insumo:
            return jsonify({"error": "Debes proporcionar 'insumo'"}), 400

        prediccion = predecir_insumo_total(insumo, desperdicio)
        return jsonify({"insumo": insumo, "cantidad_predicha_total": prediccion})
    except ValueError as ve:
        return jsonify({"error": str(ve)}), 400
    except Exception as e:
        return jsonify({"error": str(e)}), 500


# Nueva ruta para predecir el consumo de un plato en un mes
@app.route('/predict/month_plato', methods=['POST'])
def predict_month_plato():
    try:
        # Obtener datos JSON
        data = request.get_json()

        # Validar campos requeridos
        if not all(k in data for k in ["insumo", "plato", "mes"]):
            return jsonify({"error": "Faltan campos requeridos: insumo, plato, mes"}), 400

        # Mapeos de insumo, plato y mes
        insumo = category_mappings["INSUMO"].get(data["insumo"], -1)
        plato = category_mappings["PLATO"].get(data["plato"], -1)
        mes = category_mappings["MES"].get(data["mes"], -1)

        # Verificar que las categorías sean válidas
        if insumo == -1 or plato == -1 or mes == -1:
            return jsonify({"error": "El insumo, plato o mes no están reconocidos"}), 400

        # Preparar datos para el modelo
        inputs = [
            insumo,
            -1,  # Día no aplica aquí
            mes,
            plato,
            data.get("desperdicio", 0.5)  # Valor por defecto de desperdicio
        ]

        # Predecir
        prediction = model.predict([inputs])

        return jsonify({
            "insumo": data["insumo"],
            "plato": data["plato"],
            "mes": data["mes"],
            "cantidad_predicha": float(prediction[0])
        })

    except Exception as e:
        return jsonify({"error": str(e)}), 500
    
if __name__ == '__main__':
    app.run(debug=True)
