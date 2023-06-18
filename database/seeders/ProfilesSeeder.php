<?php

namespace Database\Seeders;

use App\Models\Profiles ;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profiles::factory(100)->create();

        DB::table('profiles')->insert([
            'Name' => 'soufiane ',
            'Email' => 'soufiane@gmail.com',
            'age' => 30,
         ]);
    }
}
