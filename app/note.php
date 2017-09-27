<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    protected $fillable=['title','description','notebook_id'];

    public function notebook(){
        return $this->belongsTo(Notebook::class);
    }
}
