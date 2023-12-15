<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - JasaIn</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<script>
    // $(document).ready(function() {
    //     $('#role_owner').hide();
    //     $('#role_id').change(function(e) {
    //         var role_id = $('#role_id').val();
    //         if (role_id == 2) {
    //             $('#role_user').show();
    //             $('#role_owner').hide()
    //         } else if (role_id == 3) {
    //             $('#role_owner').show();
    //             $('#role_user').hide()
    //         }
    //     });
    // });
</script>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 my-5 mx-auto">
                <div class="card shadow rounded-3">
                    <div class="card-body p-5 pb-0">
                        <a class="card-title h2 fw-bolder text-decoration-none text-primary" href="/">JasaIn
                        </a>
                        <h6 class="card-subtitle fw-normal">Halo, perkenalan dulu yuk sebelum gabung</h6>

                        <x-jet-validation-errors class="py-1 small" />

                        <form class="mb-3 mt-4" action="{{ route('register') }}" method="POST"
                            x-data="{ role_id: 2 }">
                            @csrf
                            <div class="form-floating my-2">
                                <input class="form-control " type="text" name="name" id="name"
                                    value="{{ old('name') }}" placeholder="name" required autofocus
                                    autocomplete="name">
                                <label for="name"><span
                                        class="fa fa-user-circle bg-transparent rounded-3 me-2"></span>Nama
                                    Lengkap</label>
                            </div>
                            <div class="form-floating my-2">
                                <input class="form-control " type="email" name="email" id="email"
                                    value="{{ old('email') }}" placeholder="yourname@anything.com">
                                <label for="email"><span
                                        class="fa fa-address-book bg-transparent rounded-3 me-2"></span>Alamat
                                    email</label>
                            </div>

                            <div class="form-floating my-2">
                                <input class="form-control " type="password" name="password" id="password"
                                    placeholder="anything hard" required autocomplete="new-password">
                                <label for="password"><span class="fa fa-key bg-transparent rounded-3 me-2"></span>Kata
                                    sandi</label>
                            </div>

                            <div class="form-floating my-2">
                                <input class="form-control " type="password" name="password_confirmation"
                                    id="password_confirmation" placeholder="anything hard" required
                                    autocomplete="new-password">
                                <label for="password"><span
                                        class="fa fa-key bg-transparent rounded-3 me-2"></span>Konfirmasi Kata
                                    Sandi</label>
                            </div>
                            <div class="form-group my-2">
                                <label for="role_id" class="text-bold">Mendaftar Sebagai?</label>
                                <select name="role_id" id="role_id" x-model="role_id" class="form-select ">
                                    <option value="2">Pelanggan</option>
                                    <option value="3">Penyedia Jasa</option>
                                </select>
                            </div>

                            <div id="role_user">
                                <div class="form-floating my-2" x-show="role_id == 2">
                                    <input class="form-control " type="text" name="user_address" id="user_address"
                                        value="{{ old('user_address') }}" placeholder="alamat">
                                    <label for="user_address"><span
                                            class="fa fa-map-marker-alt bg-transparent rounded-3 me-2"></span>Alamat</label>
                                </div>

                                <div class="form-floating my-2" x-show="role_id == 2">
                                    <input class="form-control " type="tel" name="user_phone_number"
                                        id="user_phone_number" value="{{ old('user_phone_number') }}"
                                        placeholder="telepon">
                                    <label for="user_phone_number"><span
                                            class="fa fa-phone bg-transparent rounded-3 me-2"></span>Nomor HP</label>
                                </div>
                            </div>

                            {{-- <div id="role_owner">
                                <div class="form-floating my-2" x-show="role_id == 3">
                                    <input class="form-control " type="text" name="owner_address" id="owner_address"
                                        value="{{ old('owner_address') }}" placeholder="alamat">
                                    <label for="owner_address"><span
                                            class="fa fa-map-marker-alt bg-transparent rounded-3 me-2"></span>Alamat</label>
                                </div>

                                <div class="form-floating my-2" x-show="role_id == 3">
                                    <input class="form-control " type="tel" name="owner_phone_number"
                                        id="owner_phone_number" value="{{ old('owner_phone_number') }}"
                                        placeholder="telepon">
                                    <label for="owner_phone_number"><span
                                            class="fa fa-phone bg-transparent rounded-3 me-2"></span>Nomor
                                        HP</label>
                                </div>
                            </div> --}}

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="row p-3 mb-3">
                                <a class="col-6 rounded-3 btn btn-outline-secondary fw-bolder py-2 m-1" type="button"
                                    href="{{ route('login') }}">{{ __('Sudah Punya Akun?') }}</a>
                                <button class="col-5 rounded-3 btn btn-primary text-uppercase fw-bold py-2 m-1"
                                    name="submit" type="submit">{{ __('Daftar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" x-data="{ role_id: 2 }">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Mendaftar Sebagai:') }}" />
                <select name="role_id" x-model="role_id"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="2">Pelanggan</option>
                    <option value="3">Penyedia Jasa</option>
                </select>
            </div>

            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="user_address" value="{{ __('Alamat') }}" />
                <x-jet-input id="user_address" class="block mt-1 w-full" type="text" :value="old('user_address')"
                    name="user_address" />
            </div>

            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="user_phone_number" value="{{ __('Nomor HP') }}" />
                <x-jet-input id="user_phone_numbe   r" class="block mt-1 w-full" type="text" :value="old('user_phone_number')"
                    name="user_phone_number" />
            </div>

            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="owner_qualifications" value="{{ __('Kategori Jasa') }}" />
                <x-jet-input id="owner_qualifications" class="block mt-1 w-full" type="text" :value="old('owner_qualifications')"
                    name="owner_qualifications" />
            </div>
            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="owner_address" value="{{ __('Alamat') }}" />
                <x-jet-input id="owner_address" class="block mt-1 w-full" type="text" :value="old('owner_address')"
                    name="owner_address" />
            </div>

            <div class="mt-4" x-show="role_id == 3">
                <x-jet-label for="owner_phone_number" value="{{ __('Nomor HP') }}" />
                <x-jet-input id="owner_phone_number" class="block mt-1 w-full" type="text" :value="old('owner_phone_number')"
                    name="owner_phone_number" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah Punya Akun') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Daftar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
