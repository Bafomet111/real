<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Post;
use App\MyClass\MyClassB;
use App\Services\DateCheck;
use Illuminate\Database\Eloquent\MassAssignmentException;

class myController extends Controller
{
    public function index() {

        $this->show();

    }

    private function show()
    {
        $comment = new Comment(['body'=>"sadfsadf"]);
        $post = Post::find(2);
        $post->comments()->save($comment);
//        $post->save();

    }

}
