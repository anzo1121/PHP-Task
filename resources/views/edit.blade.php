<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<h1>Edit Post</h1>
<form  method="post" enctype="multipart/form-data" action = "{{route("posts.update", $post->id)}}">
    @csrf
    @method("PUT")
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Post Title</label>
            <input type="name" class="form-control"  placeholder="Name" name="title" value="{{old('title', $post->title)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Post Text</label>
            <input type="name" class="form-control"  placeholder="Name" name="text" value="{{old('text', $post->text)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Post Likes</label>
            <input type="name" class="form-control"  placeholder="Name" name="post_likes" value="{{old('post_likes', $post->post_likes)}}">
        </div>
    </div>
    <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<form>
    <button formaction="127.0.0.0:8000/posts"> go back</button>
</form>
</html>
