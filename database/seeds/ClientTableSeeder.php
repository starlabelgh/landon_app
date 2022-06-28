<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
            [
                'title' => 'mr',
                'name' => 'John',
                'last_name' => 'Moses',
                'address' => 'Street 123',
                'zip_code' => '00233',
                'city' => 'Accra',
                'state' => 'Greater Accra',
                'email' => 'moses@example.com',
          ]
        );

        DB::table('clients')->insert(
            [
                'title' => 'mrs',
                'name' => 'Esther',
                'last_name' => 'Esinam',
                'address' => 'bobolink',
                'zip_code' => '00233',
                'city' => 'accra',
                'state' => 'Greater Accra',
                'email' => 'esther@example.com',
          ]
        );
    }
}
