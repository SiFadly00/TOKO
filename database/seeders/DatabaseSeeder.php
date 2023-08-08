<?php

namespace Database\Seeders;

use App\Models\kategori;
use App\Models\produk;
use App\Models\user;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        kategori::create([
            'nama' => 'laptop gaming'
        ]);
        produk::create([
            'nama' => 'ROG',
            'kategori_id' => '1',
            'harga' => '30000000',
            'foto' => 'img/rog.jpg'
        ]);
        produk::create([
            'nama' => 'NOKIA',
            'kategori_id' => '1',
            'harga' => '20000000',
            'foto' => 'img/NOKIA.jpg'
        ]);
        user::create([
            'nama' => 'Fadly',
            'email' => 'lapulapu@gmail.com',
            'password' =>bcrypt('rajasaya2'),
            'role' => 'admin'
        ]);
        user::create([
            'nama' => 'customer',
            'email' => 'lapilapi@gmail.com',
            'password' => bcrypt('rajasaya1'),
            'role' => 'user'
        ]);
    }
}
