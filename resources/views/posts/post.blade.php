
          <div class="blog-post">
         
   <h2 class="blog-post-title">
   
   <a href="posts/{{$post->id}}">{{$post->title}}</a>

   </h2>
            <p class="blog-post-meta">
              {{ $post->user['name']  }} on
            {{$post->created_at->toFormattedDateString() }}</p>

            <p>{{substr($post->body,0,40)}}</p>
@if (Auth::check())
         <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                 <a href="/posts/delete" class="btn btn-danger">Delete</a>
             <hr>
@endif

     
         
         
        
          </div><!-- /.blog-post -->

      