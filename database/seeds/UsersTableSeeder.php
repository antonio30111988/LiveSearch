<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Antonio',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('firstuser'),
        ]);
		
		 DB::table('users')->insert([
            'name' => 'Marin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('seconduser'),
        ]);
		
		 DB::table('users')->insert([
            'name' => 'Martina',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('thirduser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Nada',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('fourthuser'),
        ]);
		
		 DB::table('users')->insert([
            'name' => 'John',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('fifthuser'),
        ]);
		
		 DB::table('users')->insert([
            'name' => 'Luke',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('sixthuser'),
        ]);
		
		 DB::table('users')->insert([
            'name' => 'Fleky',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('seventhuser'),
        ]);
		
		 DB::table('users')->insert([
            'name' => 'Hayle',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
		
		 DB::table('users')->insert([
            'name' => 'Kayleigh',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('eighthuser'),
        ]);
		
		 DB::table('users')->insert([
            'name' => 'Lara',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Marcus',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Ačexander',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Josip',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Rocky',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Nina',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Nicola',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Andrea',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Radovan',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Angela',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Boris',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Darko',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Lejla',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Lidija',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
		DB::table('users')->insert([
            'name' => 'Stane',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Karlo',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Dora',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' =>'Marija',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Renato',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Snježana',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Ivanka',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Ivo',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Ivano',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Bobby',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Donald',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Vladimir',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Silva',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Seka',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Joseph',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Juan',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		DB::table('users')->insert([
            'name' => 'Julio',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('ninthuser'),
        ]);
		
    }
}
