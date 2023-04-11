<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    // How to cache id in url ie: project.test/posts/2 for id
    // $postId same as in web.php in Routes
    // Post is post object of model Post
    // called ROUTE MODEL BINDING it Binds model by typing model object type with parameter {post} in route
    public function show(Post $post)
    {

        // compact - look at notes
        return view('post', compact(var_name: 'post'));
    }
}
