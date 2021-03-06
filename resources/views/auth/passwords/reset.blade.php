@extends('layouts.auth')

@section('header')
    {{ __('Reset Password') }}
@endsection

@section('form')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-6">
            <label for="email"
                   class="block text-gray-700 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email"
                   class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  @error('email') border-red-500 @enderror"
                   name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                   placeholder="john.doe@example.com">

            @error('email')
            <p class="text-red-500 text-xs italic" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password"
                   class="block text-gray-700 text-sm font-bold mb-2">{{ __('Password') }}</label>

            <input id="password" type="password"
                   class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  @error('password') border-red-500 @enderror"
                   name="password" value="{{ old('password') }}" required autocomplete="password"
                   placeholder="********">

            @error('password')
            <p class="text-red-500 text-xs italic" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password-confirm"
                   class="block text-gray-700 text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password"
                   class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  @error('password-confirm') border-red-500 @enderror"
                   name="password" value="" required autocomplete="password-confirm"
                   placeholder="********">

            @error('password-confirm')
            <p class="text-red-500 text-xs italic" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
@endsection
