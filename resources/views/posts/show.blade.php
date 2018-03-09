@extends('layouts.master')


@section('content')
 <div class="col-sm-8 blog-main">
         

   
<h1>   {{ $post['title'] }}</h1>



            {{ $post['body'] }}
            
         <hr>
         <div class="comments">
         <ul class="list-group">
         	@foreach($post->comments as $comment)
         	<li class="list-group-item">
         	<strong>
         		{{$comment->created_at->diffForHumans()}} :&nbsp;
         	</strong>
         		{{$comment->body}}
         	</li>
				

         	@endforeach
         	</ul>
         </div>
        
          
<hr>
{{-- Adding a Comment --}}
		<div class="card">
			<div class="card-block">
	<form action="/post/{{$post->id}}/comments" method="POST">


{{csrf_field()}}

		<div class="form-group">
			<textarea name="body" class="form-control" placeholder="Your comment here" id="" cols="30" rows="10"></textarea>
				</div>
<div class="form-group">
	
			<input type="submit"  class="btn btn-primary" value="Add Comment" name="btn">
</div>
	   @if($errors->has('body'))
      <br>
    
  <div class="alert alert-danger"><strong>{{$errors->first('body')}}</strong></div>
  @endif
	</form>			
		</div>
	</div><!-- /.blog-post -->
          </div>
	


      
@endsection
