<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = [
        'name',
     ];
     public function user(){
        return $this->belongsTo('App\Models\Tasks');
     }
}
