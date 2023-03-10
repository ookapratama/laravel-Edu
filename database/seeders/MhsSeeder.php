<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
            
        for($i = 1; $i <= 20; $i++) {

            DB::table('mahasiswas')->insert([
                'nama' => $faker->name,
                'stb'  => $faker->numberBetween(200000, 300000)
            ]);

        }

    }
}
