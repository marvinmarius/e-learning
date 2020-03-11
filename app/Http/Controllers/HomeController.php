<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Role::create(['name' => 'teacher']);
        //Permission::create(['name' => 'delete_category']);
        //$role = Role::findByName('teacher');
       // $permission = Permission::findByName('course-create');
        //$role->givePermissionTo($permission);

        return view('home');
    }
}
