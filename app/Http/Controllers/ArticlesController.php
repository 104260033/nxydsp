<?php

namespace App\Http\Controllers;

use Request;
use Carbon\Carbon;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::all();
        return $articles;
    }
    public function setCreatedAtAttribute($date){
        // 未来日期的当前时间
        //$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

        // 未来日期的0点
        $this->attributes['created_at'] = Carbon::parse($date);
    }
    public function view()
    {
        //方法一
        $articles = Article::latest('created_at')->get();
        foreach($articles as $article) {
             $a = dd($article->created_at->addDays(8)->format('Y-m'));
        }
        //方法二
        //$articles = Article::orderBy('published_at', 'desc')->get();

        return view('articles.index', compact('articles'));
        //或者也可以使用这种方式
        //return view('articles.index')->with('articles', $articles);
    }
    public function scopePublished($query){
        $query->where('created_at', '<=', Carbon::now());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = Request::all();

        $input['published_at'] = Carbon::now();

        Article::create($input);

        return redirect('articles/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::findOrNew($id);

//        //找不到文章,跑出404
//        if(is_null($article)){
//            abort(404);
//        }
        return view('articles.show',\compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
