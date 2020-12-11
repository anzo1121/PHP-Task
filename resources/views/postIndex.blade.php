<a href="/posts/create">Add a post!</a>
<h1>Posts</h1>
@auth
    <h2>Name: {{Auth::User()->name}}</h2>
    <br>
    <h2>Email: {{Auth::User()->email}}</h2>
@endif
@if(count($posts) > 0)
    @foreach($posts as $post)
        <div>
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <h4>Written on {{$post->created_at}} by {{$post->user->name}}</h4>
        </div>
    @endforeach
@else
    <h2>User has not posted...yet.</h2>
@endif
