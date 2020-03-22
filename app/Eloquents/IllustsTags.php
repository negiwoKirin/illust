<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class illusts_tags extends Model
{
    protected $table = 'illusts_tags';

    protected $fillable = ['illust_id', 'tag_id'];
}
