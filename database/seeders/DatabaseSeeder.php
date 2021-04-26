<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
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
        User::factory()->create([
            "name" => "Isaac Amauri H. Maldonado",
            "email" => "isaac.hmaldonado@gmail.com",
            "password" => bcrypt("Amauri13"),
        ]);

        Project::factory(200)->create();
    }
}
