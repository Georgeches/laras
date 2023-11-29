<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function scopeFilter($query, $filters){
        //search, sort, category, maxprice, minprice
        if(isset($filters['search'])){
            $query->where('name', 'like', '%' . $filters['search'] . '%')
                ->orWhere('description', 'like', '%' . $filters['search'] .'%')
                ->orWhere('brand', 'like', '%' . $filters['search'] .'%')
                ->orWhere('model', 'like', '%' . $filters['search'] .'%');
        }
        if(isset($filters['category'])){
            $query->where('category', 'like', '%' . $filters['category'] . '%');
        }
        if(isset($filters['sort'])){
            if($filters['sort'] == 'pricehl'){
                $query->orderBy('price', 'desc');
            }
            if($filters['sort'] == 'pricelh'){
                $query->orderBy('price');
            }
        }
        if(isset($filters['maxprice'])){
            $query->where('price', '<=', $filters['maxprice']);
        }
        if(isset($filters['minprice'])){
            $query->where('price', '>=', $filters['minprice']);
        }
    }
}
