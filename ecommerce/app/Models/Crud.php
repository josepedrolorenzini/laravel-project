<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User;

class Crud extends Model
{
    use HasFactory;

    public function login($username, $password)  {
       //  $user = User::where('username', $username)->where('password', $password)->first();
        $user = User::where('username', $username)->first();
        if ($user && $user->password === $password) {
            echo "user found" ; 
            return $user;
        }
        return null;
    }
} ;

// User Model
?>  // 10:45 AM 15/03/2023
