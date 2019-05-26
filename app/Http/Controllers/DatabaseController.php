<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DatabaseController extends Controller
{
    public function insert()
    {
    	// DB::insert("insert into articles (category_id,title,content) values (1,'标题','内容')");
    	DB::table('articles')->insert([
    		[
    			'category_id'=>2,
    			'title'=>'标题2',
    			'content'=>'内容2'
    		],
    		[
    			'category_id'=>3,
    			'title'=>'标题3',
    			'content'=>'内容3'
    		]
    	]);
    }
    public function get()
    {
    	$data = DB::table('articles')
    	->select('category_id','title','content')
    	->where('title','<>','文章1')
    	->whereIn('id',[1,2,3])
    	// ->groupBy('category_id')
    	->orderBy('id','desc')
    	->limit(1)
    	->get();
    	dump($data);
    }
}
