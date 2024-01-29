@extends('layouts.app')

@section('content')
    <div class="grid place-content-center max-w-full mt-5 w-50">
        <div class="w-full max-w-xs bg-white text-justify p-3 rounded shadow-md">
            <div class="border-slate-500 text-sm font-bold uppercase">
                <h4>Login</h4>
                <hr>
            </div>
            <div class="p-3">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-md font-bold mb-2">{{ __('Email Address') }}</label>

                        <div class="p-1">
                            <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="text-red-700" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-md text-gray-700 font-bold mb-2">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="shadow w-full py-2 px-3 border rounded leading-tight outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="mb-2">
                                <input class="shadow focus:outline-none focus:shadow-outline" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="font-bold text-gray-700" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white rounded font-bold focus:outline-none focus:shadow-outline py-2 px-4">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="py-2 px-4 text-green-500 hover:text-green-700 font-bold" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
