<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash; // <-- import it at the top

use Faker\Factory as Faker;

use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        User::create([
            'first_name' => 'abraham',
            'phone' => '123456',
            'last_name' => 'garcia',
            'email' => 'adolfo.91.garcia@gmail.com',
            'password' => Hash::make('123456'),
            'industry'=> 'computerDeluxe',
            'city' => 'La ramada',
            'organization' => 'que',
            'position' => 'vaya uno',
            'is_partner' => false,
            'event_info' => 'lo que sea'
        ]);

        User::create([
            'first_name' => 'raxar',
            'phone' => '123456',
            'last_name' => 'raxar',
            'email' => 'roomin@raxar.com.ar',
            'password' => Hash::make('raxar'),
            'industry'=> 'computerDeluxe',
            'city' => 'La ramada',
            'organization' => 'que',
            'position' => 'vaya uno',
            'is_partner' => false,
            'event_info' => 'lo que sea'
        ]);
    }
}
