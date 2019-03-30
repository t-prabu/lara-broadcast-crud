<?php

use Illuminate\Database\Seeder;

class numbers_table_seeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('numbers')->insert([
            'name' => 'Admin',
            'number' => '0711231234',
        ]);
    }
}
