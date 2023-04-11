<?php

namespace App\Http\Controllers;

// MVC - Route Controller Model and View

// ELOQUENT MODELS
use App\Models\Category;

use App\Models\Post;


// this is for making requests the old way
//use Illuminate\Http\Request;
// thats for making Databases the old way
//use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() 
    {

        //Getting data from DB from database
        //$allCategories = DB::table(table: 'categories')->get();

        // This is for the Model Category.php
        $categories = Category::all();

        // posts page - latest same as orderBy
        // where filters posts
        // This is for FOREIGN KEY look up Table posts
        $posts = Post::
        when(request(key: 'category_id'), function($query) {
            // checks to see when category_id exists
            $query->where('category_id', 
            request(key: 'category_id'));
        })

        ->latest()
        ->get();

        // same as below
        // return view('index', [
        //     'categories' => $categories,
        //     'posts' => $posts
        // ]); 

        // same as above
        return view('index', compact('categories', 'posts'));

    }
}
