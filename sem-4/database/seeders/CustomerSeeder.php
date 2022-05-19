<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
        public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 100; $i++){

            $customer = new Customer();
            $customer->name = $faker->name;
            $customer->email =  $faker->email;
            $customer->password =   $faker->password;
            $customer->country =    $faker->country;
            $customer->state =   $faker->state;
            $customer->address =   $faker->address;
            $customer->gender = 'M';
            $customer->dob = $faker->date;
            $customer->save();
        }   

    }
}

