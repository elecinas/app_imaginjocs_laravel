<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //desactiva el proceso de claves foraneas
        DB::table('suppliers')->truncate(); //vacía la tabla
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); //reactiva el proceso

        DB::table('suppliers')->insert([
            'name' => 'Factoria de ideas', //string
            'phone' => '+34 699 699 699',  //string
            'nif' => '69696996R',  //string
            'address' => 'Avda. Morramen, 5. 08080', //string
            'logo' => 'http://roleropedia.com/images/3/32/Logotipo-La-Factoria-de-Ideas.jpg' //string
        ]);

        DB::table('suppliers')->insert([
            'name' => 'TCG Factory', //string
            'phone' => '+34 400 112 005',  //string
            'nif' => '11220230Q',  //string
            'address' => 'C/ Pinrel, 1. 08023', //string
            'logo' => 'https://tcgfactory.com/img/tcgfactory-logo-1550881257.jpg' //string
        ]);

        DB::table('suppliers')->insert([
            'name' => 'Jugaia', //string
            'phone' => '+34 121 999 127',  //string
            'nif' => '99445163H',  //string
            'address' => 'C/ Fregados, nº 14. CP: 08010', //string
            'logo' => 'https://www.jugaia.com/themes/jugaia/assets/img/LOGO-CAST.png' //string
        ]);
    }
}
