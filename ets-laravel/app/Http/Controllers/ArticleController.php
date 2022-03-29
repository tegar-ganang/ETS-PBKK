<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "name" => "Tegar Ganang Satrio Priambodo",
            "email" => "tegar.205025@mhs.its.ac.id",
            // "articles" =>  Article::all()
            "articles" =>  Article::latest()->get()
        ]);
    }

    public function content(Article $article){
        return view('content', [
            "article" => $article
        ]);
        
    }

}

