@extends('layouts.master')



@section('content')
  <div class="col-sm-8 blog-main">
	<h1>Publish a post</h1>
<hr>
<form action="/posts/{{$post['id']}}" method="POST">
{{csrf_field()}}
  <div class="form-group">
    <label for="title">Post Title:</label>
    <input type="text" class="form-control"  placeholder="Enter your post title" name="title" value="{{ $post['title'] }}">
    @if(count($errors))
    <br>
  <div class="alert alert-danger"><strong>{{$errors->first('title')}}</strong></div>
  @endif

  </div>
  <div class="form-group">
    <label for="body">Post Body:</label>
    <textarea  class="form-control" rows="3" placeholder="Enter your post body" name="body" > {{ $post['body'] }}</textarea>
      @if($errors->has('body'))
      <br>
    
  <div class="alert alert-danger"><strong>{{$errors->first('body')}}</strong></div>
  @endif

  </div>
  

  <input type="submit" class="btn btn-primary" value="Publish" name="btn">
</form>



	</div>
@endsection