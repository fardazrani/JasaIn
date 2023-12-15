<x-user-layout>
    <div class="bg-light">
        <div class="container rounded pt-5 pb-5">
            <div class="row">
                <div class="col-md-8">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')
                    @endif
                </div>
                <div class="col-md-4">
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        @livewire('profile.update-password-form')
                    @endif
                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        @livewire('profile.delete-user-form')
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
