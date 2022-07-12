<?php

namespace Database\Seeders;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->create();
        Avatar::factory()->for(User::first())->count(3)->create();
    }
}
