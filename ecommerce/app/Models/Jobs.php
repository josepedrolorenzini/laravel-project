<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
//use Illuminate\Support\Facades\DB;

class Jobs extends Model
{ 
    



    protected $table = "job_listings" ;
    protected $fillable = ['id','title','salary'] ;

 


}
