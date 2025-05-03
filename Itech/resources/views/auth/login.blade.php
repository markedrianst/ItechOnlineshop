<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Input -->
            <div class="input-group">
                <x-label for="email" value="{{ __('Email') }}" class="input-label" />
                <x-input id="email" class="input-field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <!-- Password Input -->
            <div class="input-group mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="input-label" />
                <x-input id="password" class="input-field" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="remember-me flex items-center mt-4">
                <label for="remember_me" class="flex items-center text-sm text-gray-600">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Submit Button -->
            <div class="action-buttons flex items-center justify-center mt-6">
                <x-button class="submit-btn w-full">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <!-- Forgot Password Link -->
            <div class="forgot-password flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Register Link -->
            <div class="register flex items-center justify-center mt-4">
                @if (Route::has('register'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-800" href="{{ route('register') }}">
                        {{ __('Create an Account') }}
                    </a>
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

<!-- Custom CSS Styles for Casual Look -->
<style>
    /* Card Styling */
    .x-authentication-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 420px;
        width: 100%;
        margin: auto;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center; /* Centers the content inside the card */
    }

    /* Input Group */
    .input-group {
        margin-bottom: 20px;
    }

    .input-label {
        font-size: 1rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
        display: block;
    }

    .input-field {
        font-size: 1.1rem;
        padding: 12px 16px;
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 25px; /* Rounded corners */
        background-color: #f9f9f9;
        transition: all 0.3s ease;
    }

    .input-field:focus {
        border-color: #4F46E5;
        box-shadow: 0 0 10px rgba(79, 70, 229, 0.2);
        outline: none;
    }

    /* Remember Me */
    .remember-me {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    /* Submit Button */
    .submit-btn {
        background-color: #4F46E5;
        color: white;
        font-weight: bold;
        padding: 14px 25px;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .submit-btn:hover {
        background-color: #4338CA;
        transform: translateY(-3px);
    }

    .submit-btn:active {
        transform: translateY(0);
    }

    /* Forgot Password and Register Links */
    a {
        text-decoration: none;
        color: #4F46E5;
        font-size: 1rem;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #4338CA;
    }

    /* Spacing and Layout */
    .mt-4 {
        margin-top: 1rem;
    }

    .mt-6 {
        margin-top: 1.5rem;
    }

    /* Flex container for centering */
    .flex.items-center.justify-center {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }
</style>
