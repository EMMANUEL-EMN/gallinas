@extends('layouts.app')

@section('content')
    <div class="w-full grid place-content-center mt-5">
        <div class="bg-white p-3 w-80 rounded shadow-md">
            <div class="mb-3 w-80">
                <h5 class="font-bold">REGISTER</h5>
                <hr>
            </div>
            <form method="POST" action="{{ route('register') }}" class="p-3">
                @csrf

                <div class="mb-2">
                    <label for="name" class="text-gray-700 font-bold mb-3">{{ __('Full Name') }}</label>

                    <div class="">
                        <input id="name" type="text" class="shadow border rounded text-gray-700 block focus:outline-none focus:shadow-outline leading-tight
                        py-2 px-4 appearance-none w-full
                        @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="email" class="text-gray-700 font-bold mb-3">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="shadow border rounded text-gray-700 block focus:outline-none focus:shadow-outline leading-tight
                        py-2 px-4 appearance-none w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="password" class="text-gray-700 font-bold mb-3">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="shadow border rounded text-gray-700 block focus:outline-none focus:shadow-outline leading-tight
                        py-2 px-4 appearance-none w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="password-confirm" class="text-gray-700 font-bold mb-3">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="shadow border rounded text-gray-700 block focus:outline-none focus:shadow-outline leading-tight
                        py-2 px-4 appearance-none w-full" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="mb-2">
                    <div class="">
                        <button type="submit" class="py-2 px-4 bg-green-500 text-white hover:bg-green-700 font-bold">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
