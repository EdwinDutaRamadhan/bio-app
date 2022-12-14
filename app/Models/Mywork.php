<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mywork extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    //Satu Mywork Model hanya memiliki satu category
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
