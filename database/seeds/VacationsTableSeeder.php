<?php

use Illuminate\Database\Seeder;
use App\Vacation;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i= 0; $i < 15 ; $i ++) { 
            //creazione istanza e record
            $new_vacation = new Vacation();

            //popolazione colonne
            $new_vacation->city = 'Roma';
            $new_vacation->accomodation = 'Hotel';
            $new_vacation->people = rand(1, 10);
            $new_vacation->flight = 'AZ2491A';
            $new_vacation->description = '';
            $new_vacation->check_in = '2021-08-03';
            $new_vacation->check_out = '2021-08-23';
            $new_vacation->price = rand(500, 10000);
            //salvare record
            $new_vacation->save();
        }
    }
}
