<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'title' => 'Paket 1',
                'slug' => 'paket-1',
                'price' => 50,
                'duration' => '1bln',
            ],
            [
                'title' => 'Paket 2',
                'slug' => 'paket-2',
                'price' => 500,
                'duration' => '1thn',
            ],
            [
                'title' => 'Paket 3',
                'slug' => 'paket-3',
                'price' => 150,
                'duration' => '3bln',
            ],
        ]);
    }
}