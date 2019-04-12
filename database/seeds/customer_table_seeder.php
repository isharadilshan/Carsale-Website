<?php

use Illuminate\Database\Seeder;

class customer_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Admin\Customer::class, 10)->create();
    }
}
