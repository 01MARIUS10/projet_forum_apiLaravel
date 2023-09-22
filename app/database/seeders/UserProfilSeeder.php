<?php

namespace Database\Seeders;

use App\Models\UserProfil;
use Illuminate\Database\Seeder;

class UserProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProfil::factory()->count(10)->create();
        //
    }
}
