<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Like;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = DB::table('blogs')->paginate(10);

        return view('blogs.index', ['blogs' => $blogs]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->save();
        return redirect('/blogs')->with('success', 'Blog Created Successfully');
    }



     public function search (Request $request)
     {

         $query = $request->input('query');

         $blogs = Blog::where('title', 'like', "%$query%")
                      ->orWhere('body', 'like', "%$query%")
                      ->get();

                      if ($blogs->isEmpty()) {
                         return view('blogs.search', ['blogs' => [], 'query' => $query]);
                     }
                    //  dd($blogs);

         return view('blogs.search', compact('blogs', 'query'));

     }
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        $likes = $blog->likes()->count();
        $dislikes = $blog->dislikes()->count();

        return view('blogs.show', compact('blog', 'likes', 'dislikes'));
    }


    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', ['blog' => $blog]);
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog Updated Successfully');
    }


    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
    public function like($id)
    {
        $blog = Blog::findOrFail($id);
        $like = new Like([
            'blog_id' => $blog->id,
            'type' => Like::LIKE
        ]);
        $like->save();

        return back();
    }

    public function dislike($id)
    {
        $blog = Blog::findOrFail($id);
        $dislike = new Like([
            'blog_id' => $blog->id,
            'type' => Like::DISLIKE //
        ]);
        $dislike->save();

        return back();
    }

}
