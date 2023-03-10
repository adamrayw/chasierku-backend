@extends('layouts.app')

@section('title', 'Checkout Berhasil!')
@section('content')
    <div class="p-4 max-w-sm mx-auto my-5 lg:my-10 bg-white rounded-lg border border-gray-200 sm:p-6 lg:p-8 text-center">
        <img src="{{ asset('img/checkout.svg') }}" alt="success-checkout" />
        <p class="mt-6 mb-3.5 text-2xl">🛒🛒🛒🛒🛒</p>
        <h1 class="text-primary font-extrabold text-xl">
            Checkout Berhasil!
        </h1>
        <p class="text-xs px-4 mt-1 text-secondary">
            Silahkan pergi ke menu Dashboard dan selesaikan pembayaran
            <a href="{{ route('dashboard') }}"
                class="mt-6 block bg-primary py-2.5 font-bold text-white rounded-lg hover:bg-primaryhover transition duration-300 active:opacity-30">Dashboard</a>
    </div>
@endsection
