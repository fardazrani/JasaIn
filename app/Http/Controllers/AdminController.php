<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        $jumlah_user = User::all()->count();
        $jumlah_income = Post::all()->sum('price');
        $jumlah_post = User::all()->count();
        // return view('admin.users.index');
        return view('admin.users.index', compact(['jumlah_user', 'jumlah_post' . 'jumlah_income']));
    }

    public function view()
    {
        // dd(User::all());
        $users = User::with('role')->get();
        return view('admin.users.view', compact(['users']));
    }

    public function account($id)
    {
        $users = User::find($id);   
        // dd($users);
        return view('admin.users.account', compact(['users']));
    }

    public function update($id, Request $request)
    {
        $users = User::find($id);
        // dd($users);
        $users->update($request->except(['_token', 'submit']));
        return redirect('/dashboard/control', 302, compact(['users']));
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/dashboard/control',);
    }
    
    public function post()
    {
        $posts = Post::with('user')->get();
        return view('admin.users.post', compact(['posts']));
    }

    public function superdata()
    {
        return view('admin.users.super');
    }
}
