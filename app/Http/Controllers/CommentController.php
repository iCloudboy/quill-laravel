<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Design;
use App\Comment;

class CommentController extends Controller
{
    public function store(Design $design)
    {
        $design->addComment(request('comment'));
    }
}
