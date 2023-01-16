<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="form-group col-md-2">
            <input type="password" placeholder="Your Current Password" class="form-control" name="current_password"
                autocomplete="current-password">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="text-danger" />
        </div>

        <div class="form-group col-md-2 py-2">
            <input type="password" name="password" placeholder="New Password" class="form-control"
                autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="text-danger" />
        </div>

        <div class="form-group col-md-2">
            <input type="password" name="password_confirmation" placeholder="New Password" class="form-control"
                autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="text-danger" />
        </div>

        <div class="flex items-center gap-4 py-2">
            <button type="submit" class="btn btn-success"> Save </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
