<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Design extends Model
{
    protected $guarded = [];

    protected $dates = [
        'tattooDate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($comment)
    {
        Comment::create([
            'comment' => $comment,
            'design_id' => $this->id,
            'user_id' => auth()->id(),
            'created_at' => Carbon::now()
        ]);
    }
}
