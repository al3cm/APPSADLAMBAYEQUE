<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Distribution;

class Distribution extends Model
{
    //
    protected $table = 'distributions';

    protected $fillable = ['nucleus_id','name','start_date','end_date','description','state'];

    public function nucleus(){
    	return $this->belongsTo(Nucleus::class);
    }
}
