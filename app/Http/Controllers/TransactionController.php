<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Transaction;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index(Request $request, $id)
    {
        $user = User::find($id);
        $posts = Post::all()->where('post_id', $user->id);
        // dd($posts);
        return view('user.transaction', compact(['posts']));
    }

    public function detail($id)
    {
        // $user = Auth::user()->id;
        $post = Post::find($id);
        $userid = Post::with('user')->get();
        // Post::all()->where('post_id', $id)->update($request->except(['_token', 'submit']));
        return view('user.post-details', compact(['post', 'userid']));
    }

    public function booking($id)
    {
        
        $user = Auth::user()->id;
        // $ownerid  = Post::with('user')->where('post',)->get();
        $post = Post::with('user')->find($id);
        Transaction::create([
            'posts_id' => $post-> id,
            // 'owners_id' => $id,
            'users_id' => $user,
            // 'price' => $post->price,
            'status' => 'pending',
        ]);

        // dd($trans);
        return Redirect('/{{$user}}/status');
    }
    public function confirmBooking($id){
        Transaction::find($id)->update([
            'status'=> 'accepted' 
        ]);
        return view('dashboard.view');
    }
    public function store(Request $request, $id) {
        $user = Auth::user()->id;
        $transaksi = Transaction::with('getPostID', 'getUserID')->where('users_id', '=', $user)->get();
        return view('', compact(['transaksi']));
    }
}
