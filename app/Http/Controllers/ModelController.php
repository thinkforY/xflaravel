<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ModelController extends Controller
{
    //
    /**
     * 调用模型
     */
    public function index(Article $articleModel)
    {
        $data = $articleModel->get();
        dump($data);
        $arr = $data->toArray();
        dump($arr);
    }

    /**
     * 获取数据
     */
    public function get(Article $article)
    {
        $data = $article->select('category_id', 'title' ,'content')
                        ->where('title', '<>', '文章1')
                        ->whereIn('id', [1,2,3])
                        ->orderBy('id', 'desc')
                        ->get();
        dump($data->toArray());
        $data = $article->articleList();
        dump($data->toArray());
    }
    /**
     * 插入数据
     */
    public function store(Article $article)
    {
        $data = [
            'category_id'=>6,
            'title'=>'文章6',
            'content'=>'内容6'
        ];
        $id = $article->create($data)->id;
        dump($id);
    }
    /**
     * 更新数据
     */
    public function update(Article $article)
    {
        $id = 6;
        $data = [
            'category_id'=>2,
            'title'=>'文章6',
            'content'=>'内容666'
        ];
        $result = $article->where('id', $id)->update($data);
        dump($result);
    }
    /**
     * 删除数据
     */
    public function delete(Article $article)
    {
        $id = 6;
        $result = $article->where('id', $id)->delete();
        dump($result);
    }
}
