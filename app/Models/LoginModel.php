<?php

namespace App\Models;
use gestaodoencas\Model;

class LoginModel extends Model
{
    protected $table ='login';

    public function getLogin($id = false)
    {
        if($id === false)
        {
            return $this -> findAll();
        }
        return $this -> asArray()
                     -> where (['id' => $id])
                     -> first();
    }
}