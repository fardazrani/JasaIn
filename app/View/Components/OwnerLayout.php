<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class OwnerLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {   
        // $pendapatan = Post::where('status', '=', '1')->sum('harga');
        $user_fix = Auth::user();
        $pendapatan = Post::where('post_id', '=', $user_fix->id)->sum('price');
        $jumlah_posts = Post::where('post_id', '=', $user_fix->id)->count();
        return view('layouts.owner', compact(['jumlah_posts', 'pendapatan']));
    }
}
