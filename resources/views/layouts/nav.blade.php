 <div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="/">Home</a>
          @if (Auth::check())
          	
         <a class="nav-link" href="/posts/create">Create</a>
         
          @endif

        </nav>
      </div>
    </div>

  