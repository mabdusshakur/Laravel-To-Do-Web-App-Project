{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<x-app-layout>

    <style>
        body {
            background: url('{{ asset('assets/img/bg-1.jpg') }}') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
    <div class="container text-center">
        <h2 class="py-2 text-success">First Login Or Register To Access The Application</h2>
    </div>

    {{-- Normal Login --}}
    {{-- <div class="container py-5 col-md-7 col-lg-6 col-xl-4 bg-black bg-opacity-25">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <input type="email" placeholder="Enter Your Email" class="form-control" aria-describedby="validationEmail"
                    name="email" value="{{old('email')}}" required autofocus>
                <div id="emailHelp" class="form-text text-white shadow-lg">We'll never share your email with anyone else.</div>

            </div>
            <div class="mb-3">
                <input type="password" placeholder="Enter Your Password" class="form-control" name="password" required
                    autocomplete="current-password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                <label class="form-check-label text-white shadow-lg" name="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="py-2">
                <a href="{{ route('register') }}" class="link link-warning">Not registered Yet?</a>
            </div>
        </form>
    </div> --}}

    {{-- Api Login --}}
    <div class="container py-5 col-md-7 col-lg-6 col-xl-4 bg-black bg-opacity-25">

        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <input type="email" placeholder="Enter Your Email" class="form-control" aria-describedby="validationEmail"
                    name="email" value="{{old('email')}}" required autofocus>
                <div id="emailHelp" class="form-text text-white shadow-lg">We'll never share your email with anyone else.</div>

            </div>
            <div class="mb-3">
                <input type="password" placeholder="Enter Your Password" class="form-control" name="password" required
                    autocomplete="current-password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                <label class="form-check-label text-white shadow-lg" name="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="py-2">
                <a href="{{ route('register') }}" class="link link-warning">Not registered Yet?</a>
            </div>
        </form> --}}
    </div>

</x-app-layout>
