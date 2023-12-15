{{-- <x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full"
                wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('New Password') }}" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password"
                autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full"
                wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section> --}}

<form wire:submit.prevent="updatePassword" role="form">
    <div class="px-4 py-5 pb-4 card">
        <div class="d-flex align-items-center mb-2">
            <span class="col-1">
            </span>
            <h5 class="text-secondary fw-bolder">
                Ubah Kata Sandi
            </h5>
        </div>
        <div class="form-floating my-1">
            <input type="password" class="form-control" id="current_password" name="current_password" placeholder=""
                wire:model.defer="state.current_password" autocomplete="current-password">
            <label for="current_password"><span class="fa fa-key mx-3 text-secondary"></span>Kata Sandi
                Lama</label>
            <x-jet-input-error for="current_password" class="text-red-400" />
        </div>
        <div class="form-floating my-1">
            <input type="password" class="form-control" id="password" name="password" placeholder=""
                wire:model.defer="state.password" autocomplete="new-password">
            <label for="password"><span class="fa fa-key mx-3 text-secondary"></span>Kata Sandi Baru</label>
            <x-jet-input-error for="password" class="text-red-400" />
        </div>
        <div class="form-floating my-1">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                placeholder="" wire:model.defer="state.password_confirmation" autocomplete="new-password">
            <label for="password_confirmation"><span class="fa fa-key mx-3 text-secondary"></span>Konfirmasi
                Kata
                Sandi</label>
            <x-jet-input-error for="password_confirmation" class="text-red-400" />
        </div>
        <div class="mt-3 text-end">
            <button class="btn btn-primary" type="submit">Ubah</button>
        </div>
    </div>
</form>
