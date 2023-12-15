<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class UserLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {   
        $post = Post::with('user')->get();
        $jumlah_posts = Post::all()->count();
        return view('layouts.user', compact('jumlah_posts', 'post'));
    }
}
