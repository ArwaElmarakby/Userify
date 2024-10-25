<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //CRUD operation using query builder
//    public function index()
//    {
////        //show all posts
//        $posts = DB::table('posts')->get();
//        return view('posts.index', ['posts' => $posts]);
//
//     }
//
//
//
//
//
//     public function create()
//     {
//         return view('posts.create');
//     }
//
//     public function store(Request $request)
//     {
////         dd(redirect());
//
//         DB::table('posts')->insert([
//             'title' => $request-> post_title,
//             'content' => $request -> post_content,
//             'user_id' => 1
//         ]);
//
//
//         return redirect()->route('posts.index')->with('successMsg', 'post has been added successfully');
//     }
//
//     public function show($id){
//        $post = DB::table('posts')->find($id);
//        return view('posts.show', ['post' => $post]);
//     }
//
//
//     public function edit($id){
//         $post = DB::table('posts')->find($id);
//         return view('posts.edit', ['post' => $post]);
//     }
//
//     public function update(Request $request, $id)
//     {
//         DB::table('posts')->where('id',$id)->update([
//             'title' => $request-> post_title,
//             'content' => $request -> post_content
//         ]);
//         return redirect()->route('posts.index')->with('updateMsg', 'post has been updated successfully');
//
//
//     }
//
//
//     public function destroy($id)
//     {
//         DB::table('posts')->where('id', $id)->delete();
//         return redirect()->route('posts.index')->with('deleteMsg', 'post has been deleted successfully');
//
//     }


//CRUD operation using eloquent ORM
    public function index()
    {
//        //show all posts
        $posts = Post::paginate(5);
        return view('posts.index', ['posts' => $posts]);

    }





    public function create()
    {
        return view('posts.create');
    }

    public function store(PostFormRequest $request)
    {
//         dd(redirect());


//        $newRequest = new PostFormRequest();
//        dd($request);

        Post::create([
            'title' => $request-> post_title,
            'content' => $request -> post_content,
            'user_id' => 1
        ]);

        return redirect()->route('posts.index')->with('successMsg', 'post has been added successfully');
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }


    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(PostFormRequest $request, $id)
    {
        Post::whereId($id)->update([
            'title' => $request-> post_title,
            'content' => $request -> post_content
        ]);
        return redirect()->route('posts.index')->with('updateMsg', 'post has been updated successfully');


    }


    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index')->with('deleteMsg', 'post has been deleted successfully');

    }

}
