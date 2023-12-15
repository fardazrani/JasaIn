{{-- <x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                        class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                        x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' +
                        photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name"
                autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
        {{-- Alamat --}}
{{-- <div class="col-span-6 sm:col-span-4">
    <x-jet-label for="user_address" value="{{ __('Alamat') }}" />
    <x-jet-input id="user_address" type="text" class="mt-1 block w-full" wire:model.defer="state.user_address" />
    <x-jet-input-error for="user_address" class="mt-2" />
</div>

</x-slot>

<x-slot name="actions">
    <x-jet-action-message class="mr-3" on="saved">
        {{ __('Saved.') }}
    </x-jet-action-message>

    <x-jet-button wire:loading.attr="disabled" wire:target="photo">
        {{ __('Save') }}
    </x-jet-button>
</x-slot>
</x-jet-form-section> --}}

<form wire:submit.prevent="updateProfileInformation" role="form">
    <div class="row">
        <div class="col-md-5">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle h-20 w-20 object-cover mt-5 shadow" width="150px" height="150px"
                    src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}">
            </div>
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4 align-items-center">
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " hidden />
                    {{-- <!-- Current Profile Photo -->
                        <div class="mt-2" x-show="! photoPreview">
                            <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                                class="rounded-full h-20 w-20 object-cover">
                        </div> --}}

                    <!-- New Profile Photo Preview -->
                    {{-- <div class=" mt-2" x-show="photoPreview">
                            <span class="block rounded-full w-20 h-20"
                                x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' +
                                photoPreview + '\');'">
                            </span>
                        </div> --}}

                    <div class=" text-center">
                        <button class="btn btn-outline-secondary rounded-3" type="button"
                            x-on:click.prevent="$refs.photo.click()">
                            <span class="fa fa-pencil"></span>
                        </button>
                        @if ($this->user->profile_photo_path)
                            <button class="btn btn-outline-danger rounded-3" type="button"
                                wire:click="deleteProfilePhoto">
                                <span class="fa fa-trash"></span>
                            </button>
                        @endif
                    </div>
                    <x-jet-input-error for="photo" class="mt-2" />
                </div>
            @endif
        </div>
        <div class="col-md-7 card">
            <div class="px-3 pt-5 pb-4">
                <div class="d-flex align-items-center mb-3">
                    <span class="col-1"></span>
                    <h4 class="fw-bolder text-secondary">Pengaturan Profil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 form-floating">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" id="name"
                            wire:model.defer="state.name" autocomplete="name">
                        <label for="name"><span class="fa fa-user mx-3 text-secondary"></span>Nama</label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-floating col-md-12 my-1">
                        <input type="email" class="form-control" id="email" name="email" placeholder="email"
                            wire:model.defer="state.email">
                        <label for=" email"><span class="fa fa-mail-bulk mx-3 text-secondary"></span>Email</label>
                    </div>
                    <div class="form-floating col-md-12 my-1">
                        <input type="tel" class="form-control" id="user_phone_number" name="user_phone_number"
                            placeholder="+62" wire:model.defer="state.user_phone_number">
                        <label for="user_phone_number"><span
                                class="fa fa-phone mx-3 text-secondary"></span>Telepon</label>
                    </div>
                    <div class="form-floating col-md-12 my-1">
                        <input type="tel" class="form-control" id="whatsappNumber" name="whatsappNumber"
                            placeholder="+62">
                        <label for="whatsappNumber"><span
                                class="fab fa-whatsapp mx-3 text-secondary"></span>Whatsapp</label>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="form-floating col-md-12 my-1">
                        <input type="text" class="form-control" id="address" name="address" placeholder="alamat"
                            wire:model.defer="state.user_address">
                        <label for="address"><span class="fa fa-map-marker-alt mx-3 text-secondary"></span>Alamat
                        </label>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <button class="btn btn-primary" type="submit" wire:target="photo">Simpan & Ganti Foto
                        Profil</button>
                </div>
            </div>
        </div>
    </div>
</form>
