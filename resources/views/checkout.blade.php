@extends('layouts.app')

@section('title', 'Berlangganan ' . $package->title)
@section('content')
    <section>
        <div
            class="h-auto p-4 max-w-sm border border-gray-300 mx-auto mt-5 lg:mt-10 mb-12 bg-white rounded-lg sm:p-6 lg:p-8">
            <h1 class=" text-xl lg:text-3xl text-slate-800 font-bold">Konfirmasi Order</h1>
            <hr class="w-8 mt-2" />
            <div class="mt-8 flex flex-col items-start">
                <div
                    class=" inline-block w-full rounded-lg p-10 bg-slate-800 text-base lg:text-xl font-medium text-gray-500 dark:text-gray-400 text-center">
                    {{ $package->title }}
                </div>
                <div class="mt-6">
                    <h2 class="mb-2 font-bold text-slate-800 text-xl">Order Details</h2>
                    <table class="text-left text-sm">
                        <tr>
                            <th class="font-medium">Nama Paket</th>
                            <td class="px-2 font-medium text-secondary">: {{ $package->title }}</td>
                        </tr>
                        <tr>
                            <th class="font-medium">Selama</th>
                            <td class="px-2 font-medium text-secondary">: {{ $package->duration }}</td>
                        </tr>
                        <tr>
                            <th class="font-medium">Harga</th>
                            <td class="px-2 font-medium text-secondary">: Rp{{ $package->price }}k</td>
                        </tr>
                    </table>
                </div>
                <form method="POST" action="{{ route('checkout.store', $package->id) }}">
                    @csrf
                    <button type="submit"
                        class="mt-6 w-full text-white bg-primary hover:bg-primaryhover focus:ring-4 focus:outline-none focus:ring-orange-300 transition font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Checkout
                    </button>
                </form>
            </div>
        </div>

    </section>
@endsection
