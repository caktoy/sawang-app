<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\FilterPaginateOrder;

class Topic extends Model
{
    use FilterPaginateOrder;

    protected $fillable = [
        'name', 'created_at', 'updated_at'
    ];

    protected $filter = [
        'id', 'created_at', 'updated_at'
    ];

    public static function initialize()
    {
        return [
            'name' => '', 'created_at' => '', 'updated_at' => ''
        ];
    }

    public function newsTopic()
    {
        return $this->hasMany(NewsTopic::class);
    }
}
