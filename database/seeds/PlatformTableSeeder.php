<?php

use Illuminate\Database\Seeder;

class PlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
            'name' => 'Twitter',
            'description' => 'Just Twitter...',
            'url' => 'https://twitter.com',
        ]);
    }
}
