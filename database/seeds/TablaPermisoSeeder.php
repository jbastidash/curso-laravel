<?php

use Illuminate\Database\Seeder;
use Illuminate\Validation\Factory;
use App\Models\Permiso;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Permiso::class,50)->create();
    }
}
