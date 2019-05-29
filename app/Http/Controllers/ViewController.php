<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ViewController extends Controller
{
    /**
     * 文章列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = '文章列表';
        $article = Article::withTrashed()
                ->orderBy('id','desc')
                ->get();
        $assign = [
            'title'=>$title,
            'article'=>$article
        ];
//        $assign = compact('title', 'title');
        return view('article.index',$assign);
    }

    /**
     * 新增文章
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = '新增文章';
        $assign = compact('title');
        return view('article.create', $assign);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->except('_token');
        Article::create($data);
        return redirect('view/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
