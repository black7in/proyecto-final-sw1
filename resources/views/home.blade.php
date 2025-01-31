@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Dashboard') }}</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    Camara para detectar insumos
                </div>
                <div class="card-body">
                    <img src="https://uploads-ssl.webflow.com/5f6bc60e665f54545a1e52a5/63d40cd2210b56e0e33593c7_loading-camera2.gif"
                        id="loading_picture" style="display: none" height="480" width="640" />

                    <div class="example_demo" id="example_demo">
                        <video muted autoplay loop id="video" width="640" height="480">
                            <source
                                src="https://uploads-ssl.webflow.com/5f6bc60e665f54545a1e52a5/63d15cb160518f7f9c59a892_Sequence 01-transcode.mp4"
                                type="video/mp4" id="video_source" />
                        </video>
                    </div>


                    <canvas width="640" height="480" id="picture_canvas" style="display: none"></canvas>
                    <canvas width="640" height="480" id="video_canvas" style="display: none"></canvas>

                    <a href="#" id="webcam-predict" class="btn button btn-primary mt-2">Iniciar camara</a>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">

                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card" style="min-height: 480px">
                <div class="card-header">
                    Lista de insumos detectados
                </div>
                <div class="card-body">

                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/inferencejs"></script>
    @vite(['resources/js/game.js'])
@endsection
