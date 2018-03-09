<?php

namespace App;


class Post extends Model
{
    //guarded is the inverse of fillable fillable the fields that you're going to allow guarded is the fields that you won't allow 
  //  protected $guarded = ['user_id'];
    //protected $guarded = []; // we're not guarding anything 

    // what we could do to not set every single model like this is making a parent class and extend it



	public function comments ()
	{
		return $this->hasMany('App\Comment');
		// you could do it like this also
		//return $this->hasMany(Comment::class);
	}
	public function addComment($body)
	{
		   // Comment::create([
     //        'body'=>$body,
     //        'post_id'=>$this->id

     //       ]);
		// it can be done like this also 
	//	$this->comments()->create(['body'=>$body]);
		// it can be done like this using compact 
		$this->comments()->create(compact('body'));



		// $this->comments (property) --> return a collection of  all the comments associated with post
// $this->comments()->create() (method)--- > add the id of the post

	}

 public function user()
    {
    	return $this->belongsTo(User::class);
    }


}
