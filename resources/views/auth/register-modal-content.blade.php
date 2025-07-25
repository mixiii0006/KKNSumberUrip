<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="register_name" :value="__('Name')" />
        <x-text-input id="register_name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Username -->
    <div class="mt-4">
        <x-input-label for="register_username" :value="__('Username')" />
        <x-text-input id="register_username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('username')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="register_password" :value="__('Password')" />

        <x-text-input id="register_password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="register_password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="register_password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>
