<?php

use Illuminate\Database\Seeder;

class car_inventory_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Admin\InventoryCar::class, 20)->create();
    }
}
