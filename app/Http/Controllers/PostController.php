<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function showFirstOnRoot() {
        $posts = Post::first();
        if (is_null($posts)){
            return view('postsPage') ;
        }else {
            return view('postsPage')-> with('posts', $posts);
        }

    }

    public function index() {
        $posts = Post::all();
        return view('posts') -> with('posts', $posts);
    }

    public function show($id) {

        $post = Post::findOrFail($id);
        return $post;
    }

    public function create() {
        $tags = Tag::all();
        return view(null);
    }

    public function save(Request $request) {
        $id = Auth::id();
        $post = new Post($request->all());
        $post->save();
        $post -> tags()->attach($request->tags);
        return redirect()->back();
    }

    public function edit($id) {
        $tags = Tag::all();
        $post = Post::findOrFail($id);
        return view('edit') -> with('post', $post);
    }

    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);

        $post -> title = $request -> title;
        $post -> text = $request -> text;
        $post -> post_likes = $request -> post_likes;

        $post->save();
        return redirect('/posts');
    }

    public function  delete($id) {
        $post = Post::findOrFail($id);
        $post -> delete();
        return redirect('/posts');
    }

    public function myPosts() {
        $id = Auth::id();
        $user = User::findOrFail($id);
        $posts = $user -> posts;
        return view('postIndex') -> with('posts', $posts);
    }
}
