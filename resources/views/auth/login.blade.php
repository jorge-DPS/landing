@extends('auth.layouts.app')

@section('title')
    <title>Accesos</title>
@endsection

@section('content')
    <div class="grid lg:grid-cols-2 grow">
        <div class="flex justify-center items-center p-8 lg:p-10 order-2 lg:order-1">
            <div class="card max-w-[370px] w-full">
                <form method="POST" action="{{ route('login.post') }}" class="card-body flex flex-col gap-5 p-10"
                      id="sign_in_form">
                    @csrf

                    <div class="text-center mb-2.5">
                        <h3 class="text-lg font-semibold text-gray-900 leading-none mb-2.5">
                            Accesos
                        </h3>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="form-label text-gray-900">
                            Correo electrónico
                        </label>
                        <input type="email" class="input" name="email" id="email"
                               placeholder="nombre@ejemplo.com" value="{{ old('email') }}" autocomplete="off" required
                               autofocus>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="flex items-center justify-between gap-1">
                            <label class="form-label text-gray-900">
                                Clave de acceso
                            </label>
                        </div>
                        <label class="input" data-toggle-password="true">
                            <input type="password" name="password" id="password"
                                   value="" placeholder="Clave de seguridad" required>
                            <button type="button" class="btn btn-icon" data-toggle-password-trigger="true"
                                    onclick="togglePasswordVisibility()">
                                <i class="ki-filled ki-eye text-gray-500 toggle-password-active:block"></i>
                                <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:hidden"></i>
                            </button>
                        </label>
                    </div>
                    <button class="btn btn-primary flex justify-center grow">
                        Iniciar sesión
                    </button>
                </form>
            </div>
        </div>
        <div
                class="lg:rounded-xl lg:border lg:border-gray-200 lg:m-5 order-1 lg:order-2 bg-top xxl:bg-center xl:bg-cover bg-no-repeat branded-bg">
            <div class="flex flex-col p-8 lg:p-16 gap-4">
                <div class="flex flex-col gap-3">
                    <h3 class="text-2xl font-semibold text-gray-900">
                        Portal de Acceso Seguro
                    </h3>
                    <a href="/">
                        <img style="max-width: 300px;" src="favicon.png"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
