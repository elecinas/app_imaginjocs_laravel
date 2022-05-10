<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //desactiva el proceso de claves foraneas
        DB::table('products')->truncate(); //vacía la tabla
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); //reactiva el proceso

        DB::table('products')->insert([
            'name' => 'Catan', //string
            'code' => '463098',  //string
            'cost' => 49.99, //float
            'iva' => 21, //smallinteger
            'stock' => 48, //integer
            'image' => 'https://m.media-amazon.com/images/I/61glTil83nS._AC_SY355_.jpg' //string
        ]);

        DB::table('products')->insert([
            'name' => 'Sushi Go!', //string
            'code' => '463099',  //string
            'cost' => 19.95, //float
            'iva' => 21, //smallinteger
            'stock' => 72, //integer
            'image' => 'https://www.feran.es/img/juego/EAN_8436017221855-6.jpg' //string
        ]);

        DB::table('products')->insert([
            'name' => 'Aquelarre', //string
            'code' => '463100',  //string
            'cost' => 59.90, //float
            'iva' => 4, //smallinteger
            'stock' => 3, //integer
            'image' => 'https://www.nosolorol.com/22-thickbox_default/aquelarre.jpg' //string
        ]);
    }
}
