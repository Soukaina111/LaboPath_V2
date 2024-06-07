<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Patient extends Model
{
    use HasFactory;
   
    public function scopeFilter($query , array $filters)
    { 
        if($filters['search'] ?? false){
            $query
            ->where('first_name','like','%'. request('search').'%')
            ->orWhere('last_name','like','%'.request('search').'%')
            ->orWhere('CIN','like','%'.request('search').'%')
            ->orWhere('DDN','like','%'.request('search').'%')
            ->orWhere('CIV','like','%'.request('search').'%')
            ->orWhere('age','like','%'.request('search').'%')
            ->orWhere('organe','like','%'.request('search').'%')
            ->orWhere('sample_type','like','%'.request('search').'%')
            ->orWhere('referent','like','%'.request('search').'%');
        }
    }
}
