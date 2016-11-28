<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nucleus extends Model
{
    //

    protected $table = 'nuclei';

    protected $fillable = ['full_name','short_name'];
    
}
