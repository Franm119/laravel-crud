<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personals')->insert([
            ['id' => 1,  'names' => 'Martha'     , 'last_name' => 'Gómez', 'sex' => 'Femenino' , 'birthday' => '1952/01/02'],
            ['id' => 2,  'names' => 'Paco'       , 'last_name' => 'Pérez', 'sex' => 'Masculino', 'birthday' => '1975/05/07'],
            ['id' => 4,  'names' => 'Jesús'      , 'last_name' => 'Pérez', 'sex' => 'Masculino', 'birthday' => '1985/02/22'],
            ['id' => 3,  'names' => 'Jessica'    , 'last_name' => 'Pérez', 'sex' => 'Femenino' , 'birthday' => '2001/05/30'],
            ['id' => 5,  'names' => 'Fran'       , 'last_name' => 'Pérez', 'sex' => 'Masculino', 'birthday' => '2012/08/28'],
            ['id' => 6,  'names' => 'Franyer'    , 'last_name' => 'Pérez', 'sex' => 'Masculino', 'birthday' => '2010/02/08'],
            ['id' => 7,  'names' => 'Johana'     , 'last_name' => 'Pérez', 'sex' => 'Femenino' , 'birthday' => '2001/01/28'],
            ['id' => 8,  'names' => 'Carmen'     , 'last_name' => 'Pérez', 'sex' => 'Femenino' , 'birthday' => '1989/08/16'],
            ['id' => 9,  'names' => 'Carlos'     , 'last_name' => 'Pérez', 'sex' => 'Masculino', 'birthday' => '1986/05/01'],
            ['id' => 10, 'names' => 'Gloria'     , 'last_name' => 'Pérez', 'sex' => 'Femenino' , 'birthday' => '1970/03/02'],
            ['id' => 11, 'names' => 'Willian'    , 'last_name' => 'Pérez', 'sex' => 'Masculino', 'birthday' => '1948/02/14'],
            ['id' => 12, 'names' => 'Martha'     , 'last_name' => 'Pérez', 'sex' => 'Femenino' , 'birthday' => '1938/07/09'],
            ['id' => 13, 'names' => 'Francheska' , 'last_name' => 'Pérez', 'sex' => 'Femenino' , 'birthday' => '2004/02/21'],
            ['id' => 14, 'names' => 'Fabiola'    , 'last_name' => 'Pérez', 'sex' => 'Femenino' , 'birthday' => '2006/02/22']
        ]);
    }
}
