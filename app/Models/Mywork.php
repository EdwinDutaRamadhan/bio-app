<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mywork extends Model
{
    use HasFactory;
    private static$object = [
        [
            'title' => 'Project Pertama',
            'slug' => 'project-pertama',
            'image' => 'desktop.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laudantium delectus ut laborum. Voluptatem, maiores officiis iste, veniam cum temporibus accusamus dolore, cumque voluptates maxime recusandae quos sequi! Ipsam, est.'
        ],
        [
            'title' => 'Project Kedua',
            'slug' => 'project-kedua',
            'image' => 'web.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut nulla, fugiat fugit accusantium ab laborum quasi temporibus magni aliquam at.'
        ],
        [
            'title' => 'Project Ketiga',
            'slug' => 'project-ketiga',
            'image' => 'desktop-1.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut nulla, fugiat fugit accusantium ab laborum quasi temporibus magni aliquam at.'
        ]
    ];
    public static function getAllData(){
        return collect(self::$object);
    }
    
    public static function detail($slug){
        $newObject = static::getAllData();
        return $newObject->firstwhere('slug', $slug);
    }
}
