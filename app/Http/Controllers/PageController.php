<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function contact()
    {
        return view('user.contact');
    }

    public function about()
    {
        return view('user.about');
    }
    public function status($user)
    {
        $user = Auth::user()->id;
        $transaksi = Transaction::with('getPostID', 'getUserID')->where('users_id', '=', $user)->get();
        return view('user.transaction', compact(['transaksi']));
        // $getowner = ::with('getPostID', 'getUserID')->get();
        // $getid = Transaction::with('getPostID', 'getUserID')->find($id);
        // $post = Post::with('user')->get;
        // dd($transaksi);
    }

    public function service()
    {
        $posts = Post::with('user')->get();
        // $postA = Post::where('kategori_jasa', '=', 'Layanan')->count();
        // $postB = Post::where('kategori_jasa', '=', 'Katering')->count();
        // $postC = Post::where('kategori_jasa', '=', 'Reparasi')->count();
        // $postD = Post::where('kategori_jasa', '=', 'Bimbel')->count();
        return view('user.service', compact(['posts']));
    }
}
