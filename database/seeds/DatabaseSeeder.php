<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $x= new App\Kleur;
        $x->kleur_gekozen = 'rood';
        $x->user_id = 1;
        $x->save();
    }
}
