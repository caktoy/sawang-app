<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;

class TopicController extends Controller
{
    public function index()
    {
        return response()
            ->json([
                'model' => Topic::filterPaginateOrder()
            ]);
    }
}
