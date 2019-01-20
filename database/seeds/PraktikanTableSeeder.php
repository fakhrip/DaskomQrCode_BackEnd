<?php

use Illuminate\Database\Seeder;

class PraktikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Praktikan::class, 30)->create();
    }
}
