<?php

use Illuminate\Database\Seeder;
use App\post;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(post::class , 30)->create();
    }
}
