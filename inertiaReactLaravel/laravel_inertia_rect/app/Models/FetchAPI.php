<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FetchAPI extends Model
{
    use HasFactory;
    protected $table = "fetchAPI";

    public function sayHello(){
        $fetchApi = new fetchAPI();
       dd($fetchApi);
       return  "hello world";
    }
}
