<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class NewsTopic extends Model
{
    use FilterPaginateOrder;

    protected $fillable = [
        'news_id', 'topic_id'
    ];

    protected $filter = [
        'news_id', 'topic_id',

        //topic
        'topics.id', 'topics.name',

        //news
        'news.id', 'news.user_id', 'title','news.content','news.longitude','news.latitude','news.status', 'news.posted_at','news.thumbnail' 
    ];

    public static function initialize()
    {
        return [
            'news_id' => '', 'topic_id' => ''
        ];
    }

    public function news()
    {
        return $this->belongsTo(News::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
