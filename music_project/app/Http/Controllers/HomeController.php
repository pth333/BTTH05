<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function getAllArticles(){
        $articles = DB::select('select * from baiviet where ma_tgia = ?',[5]);

        return view('home',compact('articles'));

    }
}
