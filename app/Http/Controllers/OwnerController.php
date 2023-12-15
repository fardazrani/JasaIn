<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class OwnerController extends Controller
{
    public function index()
    {
        $user_fix = Auth::user();
        $user = $user_fix->id;
        $pendapatan = Post::where('post_id', $user_fix->id)->sum('price');
        $jumlah_posts = Post::where('post_id', '=', $user_fix->id)->count();
        return view('owner.index', compact(['jumlah_posts', 'pendapatan']));
    }
    public function view()
    {   
        $user_fix = Auth::user();
        $posts = Post::all()->where('post_id', $user_fix->id);
        // dd($posts);
        return view('owner.view', compact(['posts']));
    }
    public function edit($id)
    {
        $posts = Post::find($id);
        // dd($posts);
        return view('owner.edit', compact(['posts']));
    }
    public function update($id, Request $request)
    {   
        $posts = Post::find($id);
        // $posts->update($request->except(['_token', 'submit']));
        $posts->update([
            'title' => $request->title,
            'body' => $request->body,
            'price' => $request->price,
        ]);
        return redirect()-> route('view', compact('posts'));
    }
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect('/dashboard/view');
        
        // return redirect()->route('view')->with(['message'=> 'Wrong ID!!'], compact('posts'));
    }
    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        // Post::create($request->except(['_token', 'submit']));
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'price' => $request->price,
            'post_id' => Auth::user()->id,
        ]);
        return Redirect('/dashboard/view');
    }
    public function data()
    {
        return view('owner.data');
    }
    
    public function order($user)
    {
        $user = Auth::user()->id;
        // $userid = User::find($user);
        // $postid = Post::where('post_id', $user)->get();//mengambil data post_id yang sama dengan user_id
        // $post = Post::with('user')->get();
        // dd($postid);
        // $trans = Transaction::where('posts_id', '')->get();
        // $transaksi = Transaction::with('getPostID', 'getUserID')->where($postid, '=', $user)->get();
        // $post = Post::where('post_id','=', $user)->get();
        $transaksi = Transaction::all();
        // $post = Post::with('user', 'getTransactionPost')->where('posts_id','=',$user)->get();
        // dd($transaksi);

        return view('owner.order', compact(['transaksi', 'user']));
    }

    public function create()
    {
        return view('owner.create');
    }

}
