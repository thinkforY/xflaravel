<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;//开启软删除
    /**
     * @var 允许赋值的字段
     */
//    protected $fillable = ['category_id' ,'title' ,'content'];
    /**
     * 不允许赋值的字段
     * @var array
     */
    protected $guarded = [];
    public function articleList()
    {
        $data = $this->select('category_id', 'title' ,'content')
                     ->where('title', '<>', '文章1')
                     ->whereIn('id', [1,2,3])
                     ->orderBy('id', 'desc')
                     ->get();
        return $data;
    }
}
