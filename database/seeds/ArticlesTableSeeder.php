<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
    		[
    			'category_id'=>4,
    			'title'=>'标题4',
    			'content'=>'内容4'
    		],
    		[
    			'category_id'=>5,
    			'title'=>'标题5',
    			'content'=>'内容5'
    		]
    	]);
    }
}
