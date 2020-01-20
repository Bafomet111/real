<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Post;
use App\MyClass\MyClassB;
use App\Services\DateCheck;

class myController extends Controller
{
    private $obj;
    private $date;
    public function __construct(MyClassB $classB, DateCheck $date) {
        $this->obj = $classB;
        $this->date = $date;
    }

    public function index() {
        echo $this->obj->myMethod();
        $this->show();
    }

    private function show()
    {
        $com = new Comment(["body" => "A new comment"]);
        $post = Post::find(1);
//        dump($post->title);
        $post->comments()->save($com);
    }

}
