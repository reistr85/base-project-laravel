<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Renan Reis', 'email' => 'reistr85@gmail.com', 'password' => '$2y$10$IkRYGIIRj8QekFhjAbOjm.b.GwF4awzuZttZJJPAoIqA00f168.be']);
    }
}
