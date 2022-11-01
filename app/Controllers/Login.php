<?php

namespace App\Controllers;

use App\Models\LoginModel;
use gestaodoencas\Controller;

class Login extends Controller
{
    public function index()
    {
        $model = new LoginModel();
       // $data['login'] = $model ->getLogin();
       $data =[
           'login' => $model ->getLogin(),
           'title' => 'Login',
       ];
       echo view('templates/header',$data)
       
       echo view('login/overview',$data)
       echo view('templates/footer',$data)
    }

    public function view ($id = null)
    {
        $model = LoginModel();
        $data['Login'] = $model -> getLogin($id);

        if(empty ($data['Login']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the Login Item:'.$id);
        }
        $data ['id'] = $data['Login']['id'];
        echo view('templates/header',$data)
        echo view('login/view',$data)
        echo view('templates/footer',$data)
    }
}