<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        return "ini adalah Isi Dari methodnya";
    }

    public Function create()
    {
            // 127.0.0.1:8000/user/create
            return "Ini Adalah halaman create method create";

    }
    
    public Function delete()
    {
            // 127.0.0.1:8000/user/delete
            return "Ini Adalah halaman delete method delete";

    }
}
