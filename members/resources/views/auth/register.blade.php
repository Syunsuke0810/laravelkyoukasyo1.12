<x-guest-layout>
    {{-- ★追加部分 --}}
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-10">
        <a href="/">
            <x-application-logo class="w-40 h-40 text-gray-500 fill-current" />
        </a>
    <div class="w-full px-6 py-4 mt-5 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
    {{-- 追加ここまで --}}

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('なまえ')" />
            <x-text-input id="name" class="block mt-1 w-80" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Eメール')" />
            <x-text-input id="email" class="block mt-1 w-80" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Avatar -->
        <div class="mt-4">
            <x-input-label for="avatar" :value="__('アイコン画像（任意・1MBまで）')" />

            <x-text-input id="avatar" class="block w-full mt-1 rounded-none" type="file" name="avatar" :value="old('avatar')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-80"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワード再入力')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-80"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('登　　録') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
