<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\News;
use App\NewsTopic;

class NewsTopicController extends Controller
{
    public function index()
    {
    	//tolong ganti table news_topic jadi news_topics
        return response()
            ->json([
                'model' => NewsTopic::with(['news','topic'])->filterPaginateOrder()
            ]);
    }
}
