<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Task;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()
            ->get()
            ->where('isPublished', 1);
//        dd($articles);
        return view('articles.index', compact('articles'));
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Article $article)
    {
//        \request()->flash();

//        dd(\request());
        $attributes = $this->validate(\request(), [
            'slug' => 'required|unique:articles,slug|regex:/^([a-z][a-z0-9_-]{1,100})$/i',
            'title' => 'required|min:5|max:100',
            'description' => 'required|max:255',
            'body' => 'required',
//            'isPublished'=>'accepted' это означает, что должно быть принято
        ]);

        $attributes['isPublished'] = (int)request()->has('isPublished');


//        $isPublished = request()->input('isPublished') == 'on' ? 1:0;
//        request('isPublished', 'off')  ;
        Article::create($attributes);
        return redirect('/');
    }


    public function show(Article $slug)
    {
        $check = 0;
//        dd($slug);
        return view('articles.show', compact('slug'));
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
