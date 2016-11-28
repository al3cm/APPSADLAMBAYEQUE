<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    //
    protected $table = 'distributions';

    protected $fillable = ['nuclei_id','name','start_date','end_date','description','state'];

}
