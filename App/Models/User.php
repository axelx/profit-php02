<?php


namespace App\Models;


use App\Models;

class User extends Models
{
    public $email;
    public $name;

    public static $table = 'users';
    const TABLE = 'users';




}