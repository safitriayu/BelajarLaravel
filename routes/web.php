<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ayu Safitri",
        "email" => "ayuvanpersie20@gmail.com",
        "image" => "profil.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ayu Safitri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, numquam voluptas dolore esse 
            mollitia molestias delectus illum reprehenderit voluptatum voluptates suscipit, nulla cum quibusdam, 
            consequatur doloremque vero tempore ut voluptatibus recusandae! Eveniet atque, quia distinctio repudiandae 
            voluptatum officia. Ratione quia impedit ullam odit. Dicta fuga incidunt culpa minima quasi quis voluptates 
            odit saepe sunt esse ut dolorum molestias totam, reprehenderit nobis voluptatem! Voluptates aut mollitia 
            aliquid magni libero reiciendis quibusdam voluptatibus harum porro maiores similique, minima ipsam 
            voluptatem! Optio, quam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Johnson",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas consequuntur ducimus illum 
            perferendis voluptatibus maxime voluptates praesentium dolores minus. Provident, aliquid deleniti 
            voluptatibus explicabo totam, ipsam unde officiis, mollitia ex sapiente beatae magnam fugiat nisi 
            doloribus molestias perspiciatis odio delectus est qui atque. Sunt cumque provident minima autem 
            quo placeat dolor asperiores. Dolorum ipsam error, tempora, itaque quod enim eum ea, nulla ullam 
            aliquid voluptate dignissimos. Eum beatae facilis aperiam soluta provident nisi maxime, ex quae, 
            velit non magni consequatur quisquam aliquam! Ullam iusto placeat unde sit vero enim, libero pariatur. 
            Eligendi sit quae sequi vel velit quia minus. Ullam?"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = 

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
