<?php

namespace App\View\Components;

use App\Models\Post;
use App\Models\User;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {   
        $jumlah_income = Post::all()->sum('price');
        $jumlah_post = Post::all()->count();
        $jumlah_user = User::all()->count();
        return view('layouts.admin', compact(['jumlah_user', 'jumlah_post', 'jumlah_income']));
    }
}
