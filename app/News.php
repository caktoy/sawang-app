<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class News extends Model
{
    use FilterPaginateOrder;
    protected $fillable = [
        'user_id', 'title', 'content', 'longitude', 'latitude', 'status', 'posted_at', 'thumbnail', 'created_at', 'updated_at'
    ];

     protected $filter = [
        'id', 'user_id', 'title', 'content', 'longitude', 'latitude', 'status', 'posted_at', 'thumbnail', 'created_at', 'updated_at'
    ];

    public static function initialize()
    {
        return [
            'user_id' => '', 'title' => '', 'content' => '', 'longitude' => '', 'latitude' => '', 'status' => '', 'posted_at' => '', 'thumbnail' => '', 'created_at' => '', 'updated_at' => ''
        ];
    }
}
