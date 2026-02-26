<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Praktikum 1 & 2: Basic routes
    public function hello()
    {
        return view('hello', [
            'title' => 'Hello',
            'message' => 'Selamat datang di halaman Hello!'
        ]);
    }

    public function world()
    {
        return view('world', [
            'title' => 'World',
            'message' => 'Ini adalah halaman World'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'message' => 'Halaman about kami'
        ]);
    }

    // Praktikum 3: Route dengan parameter
    public function user($name)
    {
        return view('user', [
            'title' => 'User',
            'name' => $name,
            'message' => "Selamat datang, " . ucfirst($name) . "!"
        ]);
    }

    public function post($id)
    {
        return view('post', [
            'title' => 'Post',
            'id' => $id,
            'message' => "Ini adalah post nomor " . $id
        ]);
    }

    public function userPosts($name, $id)
    {
        return view('user-posts', [
            'title' => 'User Posts',
            'name' => $name,
            'id' => $id,
            'message' => "Post ({$id}) dari user {$name}"
        ]);
    }

    public function home()
    {
        return view('welcome', [
            'title' => 'Home'
        ]);
    }
}
