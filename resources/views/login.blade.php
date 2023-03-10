@extends('layouts.app')

@section('title', 'Login')
@section('content')
    <!-- Login Form -->

    <div class="p-4 max-w-sm mx-auto my-5 lg:my-10 bg-white rounded-lg border border-gray-200 sm:p-6 lg:p-8">
        <form class="space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            <h5 class=" text-xl lg:text-2xl lg:text-center font-extrabold text-slate-800">
                Login | <span class="text-orange-500">Chasierku</span>
            </h5>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-primary">Email</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border transition border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="name@company.com" value="{{ old('email') }}" required />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-primary">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••"
                    class="bg-gray-50 border transition border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-blue-500 block w-full p-2.5"
                    required />
            </div>
            <div class="flex items-start">
                <div class="flex items-start">
                    <!-- <div class="flex items-center h-5">
                                                                                    <input
                                                                                      id="remember"
                                                                                      type="checkbox"
                                                                                      value=""
                                                                                      class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                                                                      required=""
                                                                                    />
                                                                                  </div>
                                                                                  <label
                                                                                    for="remember"
                                                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                                                                    >Remember me</label
                                                                                  > -->
                </div>
                <a href="#" class="ml-auto text-sm text-primary hover:underline">Lupa Password?</a>
            </div>
            <button type="submit"
                class="w-full text-white bg-primary hover:bg-primaryhover focus:ring-4 focus:outline-none focus:ring-orange-300 transition font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Login
            </button>
            <div class="text-xs text-center font-medium text-secondary">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-slate-800 underline">Register</a>
            </div>
        </form>
    </div>
@endsection
