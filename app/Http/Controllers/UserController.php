<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index()
    {
        //$users = User::all();
        //$users = User::orderBy('name', 'desc')->get();
        //$users = User::where('name', 'steve')->get();
        //$users = User::latest()->get();

        return view('users.index',[
        ]);

    }

    public function show($id)
    {
        //$user = User::findOrFail($id);
        return view('users.show');
    }

    public function create()
    {
        return view('users.create');
    }

    public function validateData()
    {
        return view('users.validate');
    }

    public function store()
    {
        $users = User::all();
        if(count($users) > 0)
        {
            foreach ($users as $u)
            {
                if(strtolower($u->email)==strtolower(request('email'))) abort(403, 'User already registered.');
            }
            if(request('password')==request('password2'))
            {

                $u = $this->loadUser(request('name'), request('surname'), request('email'), request('password'));
                $u->save();
                return Redirect('/');
            }
            else abort(403, 'User passwords do not coincide.');
        }
        else {
            if(request('password')==request('password2')) {
               $u = $this->loadUser(request('name'), request('surname'), request('email'), request('password'));
                $u->save();
                return Redirect('/');
            }
            else abort(403, 'User passwords do not coincide.');
        }
    }

    public function getUser()
    {
        $users = User::all();
        if(count($users)>0)
        {
            foreach ($users as $u)
            {
                if($u->email == request('email'))
                {
                    if($u->password == request('password'))
                    {
                        redirect('/pizzas/create');
                        return $u;
                    }
                }
            }
            abort(403, 'User not found.');

        }
        abort(403, 'User not found.');
    }

    public function loadUser($name, $surname, $email,$password)
    {
        $u = new User();
        $u->name = $name;
        $u->surname = $surname;
        $u->email = $email;
        $u->password = $password;
        return $u;
    }
}
