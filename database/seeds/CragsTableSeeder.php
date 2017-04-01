<?php

use Illuminate\Database\Seeder;

class CragsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crags')->insert([
            'label' => 'Rocher des Aures',
            'rock' => 1,
            'code_country' => 'fr',
            'country' => 'France',
            'region' => 'Drôme',
            'user_id' => 1,
            'lat' => 44.469432,
            'lng' => 5.057882,
        ]);

        DB::table('crags')->insert([
            'label' => 'Arzelier',
            'rock' => 2,
            'code_country' => 'fr',
            'country' => 'France',
            'region' => 'Drôme',
            'user_id' => 2,
            'lat' => 44.473142,
            'lng' => 5.140590,
        ]);
    }
}
