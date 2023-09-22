<?php

namespace Database\Seeders;

use App\Models\UserAuth;
use Illuminate\Database\Seeder;

class UserAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAuth::factory()->count(4)->create();
    }
}
