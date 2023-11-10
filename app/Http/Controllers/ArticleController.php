<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie= Categorie::all();
        $article= Article::all();
        return view("articles.article",["articles"=>$article,"categories"=>$categorie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie= Categorie::all();
        return view("articles.ajouterArticle",["categories"=>$categorie]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articlereq= $request->validate([
            "titre"=>"required",
            "description"=>"required",
            "categorie_id"=>"required"
        ]);
        $article= new Article($articlereq);
        $article->save();

        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article= Article::find($id);
        // dd($article);
        $categorie= Categorie::where("id", '=',$article->categorie_id)->first();
      // dd($categorie[0]->nomCategorie);
        return view("articles.voirPlus",["articles"=>$article,"categorie"=>$categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles= Article::find($id);
        $categories= Categorie::all();
        return view("articles.modifierArticle",compact("categories","articles"));
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
        return "bonjour";
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
