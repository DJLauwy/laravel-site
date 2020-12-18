<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discography extends Model
{
    protected $fillable = ['artist', 'title', 'cover', 'genre', 'year'];
}
