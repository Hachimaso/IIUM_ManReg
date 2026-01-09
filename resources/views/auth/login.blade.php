<x-guest-layout>
    <div class="min-h-screen w-full flex items-center justify-center bg-[#2f615b]">
        <div class="w-full max-w-sm bg-white rounded-lg shadow-lg p-6">

            <!-- Logo -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/iium-logo.png') }}"
                     alt="IIUM Logo"
                     class="h-50">
            </div>

            <!-- Title -->
            <div class="text-center mb-6">
                <h2 class="font-semibold text-gray-800">
                    INTERNATIONAL ISLAMIC UNIVERSITY MALAYSIA
                </h2>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Username (Email internally) -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">
                        Username:
                    </label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="mt-1 block w-full rounded border-gray-300 bg-gray-200 focus:border-green-600 focus:ring-green-600"
                    >
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">
                        Password:
                    </label>
                    <input
                        type="password"
                        name="password"
                        required
                        class="mt-1 block w-full rounded border-gray-300 bg-gray-200 focus:border-green-600 focus:ring-green-600"
                    >
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <!-- Login Button -->
                <button
                    type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded mt-2"
                >
                    LOGIN
                </button>
            </form>

            <!-- Footer text -->
            <p class="text-xs text-gray-600 mt-4 text-center">
                For security reasons, please log out and exit your web browser when
                you are done accessing services that require authentication
            </p>

            <p class="text-xs text-gray-500 mt-4 text-center">
                Copyright © 2005–2026 Apereo, Inc.
                Powered by CAS 5.2.4
            </p>
        </div>
    </div>
</x-guest-layout>

