<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@foreach($posts as $post)
<h1>{{$post->title}}</h1>
<p>{{$post->text}}</p>
<p>{{$post->post_likes}}</p>
<form>
    <button formaction="http://127.0.0.1:8000/posts/{{$post->id}}/edit">Edit</button>
</form>
<form method="post">
    @csrf
    @method('DELETE')
    <button formaction="http://127.0.0.1:8000/posts/{{$post->id}}/delete">Delete</button>
</form>
@endforeach
<form>
    <button formaction="http://127.0.0.1:8000/">Go Back</button>
</form>
