@extends('layouts.app')
@section('title', 'Chasierku - Aplikasi kasir termurah!')
@section('content')
    <div class="mt-8 lg:mt-10 max-w-7xl mx-auto">
        <!-- Hero Section -->
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full lg:w-1/2 space-y-4">
                <div class="w-fit flex items-center space-x-2 bg-gray-50 px-3 py-2 rounded-full text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-6 lg:w-6" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd" />
                    </svg>

                    <p class="text-xs lg:text-sm">
                        Aplikasi kami tanpa perangkat khusus loh!
                    </p>
                </div>
                <h1 class="text-2xl lg:text-4xl font-extrabold text-slate-800">
                    Sistem <span class="text-primary">point of sale</span> untuk
                    segala bisnis.
                </h1>
                <p class="text-xs lg:text-lg font-light leading-relaxed mt-2 text-secondary">
                    Kami membantu bisnis anda mempercepat proses penjualan dengan
                    aplikasi kasir berbasis cloud, Akses kapanpun dimanapun!
                </p>
                <a href="#"
                    class="rounded-full bg-primary hover:bg-primaryhover transition duration-300 inline-block mt-4 px-4 py-2 lg:px-6 lg:py-3 font-semibold text-sm lg:text-base text-white">
                    Lihat Harga
                </a>
            </div>
            <div class="w-full lg:w-1/2 mt-8 lg:mt-0">
                <img src="{{ asset('img/hero.jpg') }}" alt="ss" class="w-full lg:max-w-lg ml-auto" />
            </div>
        </div>
        <!-- End Hero -->

        <!-- Intro Fitur -->
        <div class="mt-16 lg:mt-64 mb-10 max-w-5xl px-4 lg:px-0 mx-auto space-y-10 lg:space-y-20">
            <div class="flex flex-col-reverse lg:flex-row flex-wrap justify-between">
                <div class="space-y-2 lg:w-1/2 text-center lg:text-left">
                    <h1 class="font-bold text-lg lg:text-3xl text-slate-800">
                        Berjualan di toko dengan mudah dan full online.
                    </h1>
                    <p class="text-xs lg:text-base font-light text-secondary">
                        Dengan database yang sama, menjamin produk, inventory dan
                        laporan yang tetap sinkron.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('img/online.svg') }}" alt="online" class="w-40 mx-auto mb-6 lg:w-60 ml-auto" />
                </div>
            </div>
            <div class="flex flex-col lg:flex-row flex-wrap justify-between">
                <div class="lg:w-1/2">
                    <img src="{{ asset('img/noconfig.svg') }}" alt="noconfig" class="w-40 mx-auto mb-6 lg:w-60 mr-auto" />
                </div>
                <div class="space-y-2 lg:w-1/2 text-center lg:text-left">
                    <h1 class="font-bold text-lg lg:text-3xl text-slate-800">
                        Atur sistem kasir dalam hitungan menit.
                    </h1>
                    <p class="text-xs lg:text-base font-light text-secondary">
                        Atur produk, inventory, laporan, dan lain-lain dengan mudah.
                    </p>
                    <div class="flex items-center justify-center lg:justify-start pt-2 space-x-5 lg:space-x-10 ">
                        <img src="{{ asset('img/ovo.svg') }}" alt="ovo" class="w-5 lg:w-10">
                        <img src="{{ asset('img/dana.svg') }}" alt="dana" class="w-10 lg:w-20">
                        <img src="{{ asset('img/gopay.svg') }}" alt="gopay" class="w-10 lg:w-20">
                        <img src="{{ asset('img/shopeepay.svg') }}" alt="shopeepay" class="w-10 lg:w-20">
                    </div>
                </div>
            </div>
            <div class="flex flex-col-reverse lg:flex-row flex-wrap justify-between">
                <div class="space-y-2 lg:w-1/2 text-center lg:text-left">
                    <h1 class="font-bold text-lg lg:text-3xl text-slate-800">
                        Tanpa menggunakan perangkat khusus.
                    </h1>
                    <p class="text-xs lg:text-base font-light text-secondary">
                        Aplikasi kami berbasis web, sehingga dapat berjalan di tablet
                        atau desktop dan berbagai sistem operasi.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('img/desktop.svg') }}" alt="desktop"
                        class="w-40 mx-auto mb-6 lg:w-60 lg:ml-auto" />
                </div>
            </div>
        </div>
        <!-- End Intro Fitur -->

        <!-- Start Fitur Utama -->
        <div class="mt-16 lg:mt-36 mb-10 max-w-5xl px-5 py-6 lg:px-6 mx-auto space-y-4 bg-primary rounded-lg" id="fitur">
            <h1 class="font-bold text-lg lg:text-2xl text-center lg:text-left text-white">
                Fitur yang memenuhi kebutuhan
            </h1>
            <div class="grid grid-flow-row lg:grid-flow-col-dense gap-y-4 lg:gap-4">
                <div class="shadow-lg rounded px-4 py-8 bg-white space-y-2">
                    <img src="https://img.icons8.com/fluency/48/000000/easy.png" />
                    <h2 class="font-bold text-sm lg:text-base text-slate-800">
                        Mudah & Cepat
                    </h2>
                    <p class="text-xs font-light text-secondary leading-relaxed">
                        Mudah untuk dipahami dan langsung dapat digunakan dengan cepat
                        dalam hitungan menit
                    </p>
                </div>
                <div class="shadow-lg rounded px-4 py-8 bg-white space-y-2">
                    <img
                        src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/48/000000/external-report-infographic-elements-vitaliy-gorbachev-flat-vitaly-gorbachev.png" />
                    <h2 class="font-bold text-sm lg:text-base text-slate-800">
                        Laporan Lengkap
                    </h2>
                    <p class="text-xs font-light text-secondary leading-relaxed">
                        Lihat laporan, pelanggan, transaksi terakhir dengan cepat dan
                        real-time
                    </p>
                </div>
                <div class="shadow-lg rounded px-4 py-8 bg-white space-y-2">
                    <img src="https://img.icons8.com/color/48/000000/product--v1.png" />
                    <h2 class="font-bold text-sm lg:text-base text-slate-800">
                        Manajemen Stok
                    </h2>
                    <p class="text-xs font-light text-secondary leading-relaxed">
                        Mengelola dan mengetahui posisi stok produk dengan cepat dan
                        mudah dari mana aja
                    </p>
                </div>
            </div>
        </div>
        <!-- End Fitur Utama -->

        <!-- Pricing Start -->
        <div class="my-10 lg:my-48 max-w-5xl lg:px-0 mx-auto space-y-2" id="harga">
            <div class="mb-6 space-y-2">
                <h1 class="font-extrabold text-lg lg:text-4xl text-center text-slate-800">
                    Tunggu apalagi? ayo berlangganan!
                </h1>
                <p class="text-xs lg:text-lg text-secondary text-center">
                    Silahkan dipilih paket nya
                </p>
            </div>
            <div class="grid lg:grid-flow-col-dense items-center gap-4">
                @foreach ($packages as $p)
                    <div class="p-4 w-full bg-slate-800 rounded-lg border shadow-md sm:p-8">
                        <h5 class="text-base lg:text-xl font-medium text-gray-500 dark:text-gray-400">
                            {{ $p->title }}
                        </h5>
                        <div class="mt-4 mb-6 flex items-baseline text-gray-900 dark:text-white">
                            <span class="text-sm lg:text-3xl font-semibold">Rp</span>
                            <span class="text-xl lg:text-5xl font-extrabold tracking-tight">{{ $p->price }}k</span>
                            <span
                                class="ml-1 text-sm lg:text-xl font-normal text-gray-500 dark:text-gray-400">/{{ $p->duration }}</span>
                        </div>

                        <a href="checkout/{{ $p->slug }}"
                            class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-200 transition duration-200 font-medium rounded-lg text-xs lg:text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                            Berlangganan
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End Pricing -->
    </div>
@endsection
