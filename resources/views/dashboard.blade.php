@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
    <section>
        <!-- Dashboard Section -->
        <div class="h-screen my-8 lg:my-10 max-w-7xl mx-auto">
            <p class="text-xs text-slate-800 font-bold my-2">DASHBOARD</p>
            <h1 class="text-2xl text-primary font-bold">Paket Saya</h1>

            <div class="mt-4 w-full overflow-auto">
                @if ($data->count() > 0)
                    <table class="w-full">
                        <thead>
                            <tr class="text-left text-secondary border-b">
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="py-4 pr-10">{{ $item->package->title }}</td>
                                    <td class="py-4 pr-10">{{ $item->package->price }}k</td>

                                    @if ($item->payment_status === 'waiting')
                                        <td class="py-4 pr-10 text-yellow-500 font-semibold">
                                            Menunggu Pembayaran
                                        </td>
                                    @elseif ($item->payment_status === 'paid')
                                        <td class="py-4 pr-10 text-green-500 font-semibold">
                                            Sudah Dibayar
                                        </td>
                                    @endif
                                    <td class="text-green-500 font-semibold py-4 pr-10">
                                        <a href="{{ $item->midtrans_url }}"
                                            class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 transition font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                            target="_blank">Bayar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="text-center">
                        <p class="font-bold text-xl text-center">Kamu belum berlangganan paket apapun.</p>
                        <a href="/#harga"
                            class="rounded-lg bg-primary hover:bg-primaryhover transition duration-300 inline-block mt-4 px-4 py-2 lg:px-6 lg:py-3 font-semibold text-xs lg:text-sm text-white">
                            Lihat Harga
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
