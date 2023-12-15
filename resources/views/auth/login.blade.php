<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - JasaIn</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="/css/theme.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="/js/bootstrap.js"></script>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 my-5 mx-auto">
                <div class="card border-0 shadow rounded-3">
                    <div class="card-body p-5 pb-0">
                        <a class="card-title text-center fw-bolder fs-2 text-decoration-none text-primary"
                            href="/">JasaIn
                        </a>
                        <h4 class="card-title fw-normal fs-6">Hai! Selamat Datang!</h4>
                        <x-jet-validation-errors class="py-2 small" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating my-1">
                                <input class="form-control" type="email" name="email" id="email" placeholder="email"
                                    value="{{ old('email') }}" required autofocus>
                                <label for="email"><span
                                        class="fa fa-user-circle bg-transparent rounded-3 me-2"></span>Alamat
                                    Email</label>
                            </div>
                            <p class="text-danger small"></p>
                            <div class="form-floating my-1">
                                <input class="form-control" type="password" name="password" id="password"
                                    placeholder="password" required autocomplete="current-password">
                                <label for="password"><span class="fa fa-key bg-transparent rounded-3 me-2"></span>Kata
                                    Sandi</label>
                            </div>
                            <p class="text-danger small"></p>
                            <div class="row p-1">
                                <div class="col justify-content-start form-check mb-2 ms-3">
                                    <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me">
                                    <label class="form-check-label small" for="remember_me">Ingat Saya!</label>
                                </div>
                                <div class="col justify-content-end">
                                    <a href="#" class="text-muted small">Lupa Kata
                                        Sandi<span
                                            class="fa fa-question-circle bg-transparent rounded-3 ms-1"></span></a>
                                </div>
                            </div>
                            <div class="row p-3 mb-3">
                                @if (Route::has('register'))
                                    <a class="col-7 rounded-3 btn btn-outline-secondary fw-bolder py-2 m-1"
                                        type="button"
                                        href="{{ route('register') }}">{{ __('Belum Punya Akun?') }}</a>
                                @endif

                                <button class="col-4 rounded-3 btn btn-primary text-uppercase fw-bold py-2 m-1"
                                    name="submit" type="submit">{{ __('Masuk') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-floating my-1">
                <input class="form-control" type="email" name="email" id="email" placeholder="email"
                    value="{{ old('email') }}" required autofocus>
                <label for="email"><span class="fa fa-user-circle bg-transparent rounded-3 me-2"></span>Alamat
                    Email</label>
            </div>
            <p class="text-danger small"></p>
            <div class="form-floating my-1">
                <input class="form-control" type="password" name="password" id="password" placeholder="password"
                    required autocomplete="current-password">
                <label for="password"><span class="fa fa-key bg-transparent rounded-3 me-2"></span>Kata
                    Sandi</label>
            </div>
            <p class="text-danger small"></p>
            <div class="row p-1">
                <div class="col justify-content-start form-check mb-2 ms-3">
                    <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me">
                    <label class="form-check-label small" for="rememberPassword">Ingat Saya!</label>
                </div>
                <div class="col justify-content-end">
                    <a href="#" class="text-muted small">Lupa Kata
                        Sandi<span class="fa fa-question-circle bg-transparent rounded-3 ms-1"></span></a>
                </div>
            </div>
            <div class="row p-3">
                @if (Route::has('password.request'))
                    <a class="col rounded-3 btn btn-outline-secondary fw-bolder py-2 m-1" type="button"
                        href="{{ route('register') }}">{{ __('Belum Punya Akun?') }}</a>
                @endif

                <button class="col rounded-3 btn btn-primary text-uppercase fw-bold py-2 m-1" name="submit"
                    type="submit">{{ __('Masuk') }}</button>
            </div>



            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Belum Punya Akun?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

</html>
