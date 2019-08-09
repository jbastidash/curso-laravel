<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'rol','permiso'
        ]);
        $this->call(TablaRolSeeder::class);
        $this->call(TablaPermisoSeeder::class);
    }

    public function truncateTablas (array $tablas)
    {
     //   DB::statement('SET_FOREING_KEY_CHECK=0;');
        Foreach ($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
       // DB::statement('SET_FOREING_KEY_CHECK=1;');

    }

}
