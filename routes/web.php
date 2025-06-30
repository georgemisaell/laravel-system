<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    // $posts = $user->posts->load('category', 'author');
    $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9)->withQueryString();

    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Blog Page', 'post' => $post]);
});

// Route::get('/author/{user:username}', function (User $user) {
//     // $posts = $user->posts->load('category', 'author');
//     return view('posts', ['title' => count($user->posts). ' Article By '. $user->name , 'posts' => $user->posts]);
// });

// Route::get('/categories/{category:slug}', function (Category $category) {
//     // $posts = $category->posts->load('category', 'author');
//     return view('posts', ['title' => 'Category: '. $category->name, 'posts' => $category->posts]);
// });

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
