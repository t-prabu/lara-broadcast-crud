<?php

use Illuminate\Database\Seeder;

class network_table_seeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('networks')->insert([
            'name' => 'Mobitel',
            'network_id' => '071',
        ]);
    }
}
