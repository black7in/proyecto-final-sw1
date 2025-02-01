@extends('layouts.guest')

@section('content')
    <div class="col-lg-6">
        <div class="auth-cover-wrapper bg-primary-100">
            <div class="auth-cover">
                <div class="title text-center">
                    <h1 class="text-primary mb-10">{{ __('Pagina de Registro') }}</h1>
                </div>
                <div class="cover-image">
                    <img src="{{ asset('images/logo/logo-almacen.png') }}" alt="">
                </div>

            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-lg-6">
        <div class="signin-wrapper">
            <div class="form-wrapper">
                <h6 class="mb-15">{{ __('Registro Usuario Empresa') }}</h6>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input type="text" @error('name') class="form-control is-invalid" @enderror
                                            name="name" id="name" placeholder="{{ __('Name') }}"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label for="email">{{ __('Email') }}</label>
                                        <input @error('email') class="form-control is-invalid" @enderror type="email"
                                            name="email" id="email" placeholder="{{ __('Email') }}"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input type="password" @error('password') class="form-control is-invalid" @enderror
                                            name="password" id="password" placeholder="{{ __('Password') }}" required
                                            autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                        <input type="password" @error('password') class="form-control is-invalid" @enderror
                                            name="password_confirmation" id="password_confirmation"
                                            placeholder="{{ __('Confirm Password') }}" required
                                            autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label for="nameEmpresa">{{ __('Nombre Empresa') }}</label>
                                        <input type="text"
                                            @error('nameEmpresa') class="form-control is-invalid" @enderror
                                            name="nameEmpresa" id="nameEmpresa" placeholder="{{ __('Nombre Empresa') }}"
                                            value="{{ old('nameEmpresa') }}" required autocomplete="nameEmpresa" autofocus>
                                        @error('nameEmpresa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label for="country">{{ __('País') }}</label>
                                        <input @error('country') class="form-control is-invalid" @enderror type="country"
                                            name="country" id="country" placeholder="{{ __('País') }}"
                                            value="{{ old('country') }}" required autocomplete="country">
                                        @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label for="city">{{ __('Ciudad') }}</label>
                                        <input @error('city') class="form-control is-invalid" @enderror type="city"
                                            name="city" id="city" placeholder="{{ __('Ciudad') }}"
                                            value="{{ old('city') }}" required autocomplete="city">
                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label for="address">{{ __('Dirección') }}</label>
                                        <input @error('address') class="form-control is-invalid" @enderror type="address"
                                            name="address" id="address" placeholder="{{ __('Dirección') }}"
                                            value="{{ old('address') }}" required autocomplete="address">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end col -->
                    <div class="col-12">
                        <div class="button-group d-flex justify-content-center flex-wrap">
                            <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                                {{ __('Registrarse') }}
                            </button>
                        </div>
                    </div>
                    <!-- end row -->
                </form>
            </div>
        </div>
    </div>
    <!-- end col -->
@endsection
