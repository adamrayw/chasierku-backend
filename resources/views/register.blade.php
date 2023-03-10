@extends('layouts.app')

@section('title', 'Register')
@section('content')
    <!-- Login Form -->

    <div class="p-4 max-w-sm mx-auto my-5 lg:my-10 bg-white rounded-lg border border-gray-200 sm:p-6 lg:p-8">
        <form class="space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
            <h5 class="text-xl lg:text-2xl lg:text-center font-extrabold text-slate-800">
                Register | <span class="text-orange-500">Chasierku</span>
            </h5>
            <div>
                <label for="Nama Usaha / Nama Pribadi" class="block mb-2 text-sm font-medium text-primary">Nama Usaha / Nama
                    Pribadi</label>
                <input type="Nama Usaha / Nama Pribadi" name="name" id="Nama Usaha / Nama Pribadi"
                    class="bg-gray-50 border transition border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Kopi Segar Nikmat" value="{{ old('name') }}" required />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
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
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="confirmation_password" class="block mb-2 text-sm font-medium text-primary">Konfirmasi
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••"
                    class="bg-gray-50 border transition border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-blue-500 block w-full p-2.5"
                    required />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
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
            </div>
            <button type="submit"
                class="w-full text-white bg-primary hover:bg-primaryhover focus:ring-4 focus:outline-none focus:ring-orange-300 transition font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Register
            </button>
            <div class="text-xs text-center font-medium text-secondary">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-slate-800 underline">Login</a>
            </div>
        </form>
    </div>
@endsection
