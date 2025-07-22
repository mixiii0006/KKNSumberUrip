<x-modal name="loginModal" :show="false" maxWidth="md">
    @include('auth.login-modal-content')
</x-modal>

<x-modal name="registerModal" :show="false" maxWidth="md">
    @include('auth.register-modal-content')
</x-modal>
