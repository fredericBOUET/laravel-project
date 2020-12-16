<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

class Biere extends Model
{
    use HasFactory;
    use SoftDeletes;

protected $dates=['delete_at'];

protected $fillable=[
    'nom',
    'brasserie',
    'description',
    'image', 
    'type'

];

public function show($id){
    $posts=Post::find($id);
    return $posts->title;
}

public function users(){
    return $this->belongsToMany('App\Models\User');
}

}
