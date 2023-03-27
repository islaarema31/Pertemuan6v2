<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->where('id','1')->update([
            // 'name'=> 'Muhammad Islahuddin',
            // 'role'=> 'Software Engineer',
            // 'nim'=> '2141720268',
            // 'birth'=> 'Malang, 31 Mei 2002',
            // 'address'=> 'Malang'
            'slug' => 'isla'
        ]);
    }
}
