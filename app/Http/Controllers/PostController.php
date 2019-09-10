<?php

namespace App\Http\Controllers;

use App\Post;
use Image;
use Illuminate\Http\Request;
use Mail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::latest()->paginate(10);
      return view('admin.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate the data
     $this->validate($request, array(
             'title'         => 'required|max:255',
             'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
             'dscr'          => 'required'
         ));
     // store in the database
     $post = new Post;
     $post->title = $request->title;
     $post->slug = $request->slug;
     $post->metatitle = $request->metatitle;
     $post->dscr = $request->dscr;
     $post->excerpt = $request->excerpt;
     $post->body = $request->body;

     if ($request->hasFile('img')) {
       $image = $request->file('img');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       $location = public_path('images/blog/' . $filename);
       Image::make($image)->save($location);
       $post->image = $filename;
     }


     $post->save();

      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('admin.posts.show')->withPost($post)->withPosts($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     // store in the database
     $post = Post::find($id);
     $post->title = $request->input('title');
     $post->slug = $request->input('slug');
     $post->metatitle = $request->input('metatitle');
     $post->dscr = $request->input('dscr');
     $post->excerpt = $request->input('excerpt');
     $post->body = $request->input('body');

     if ($request->hasFile('img')) {
       $image = $request->file('img');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       $location = public_path('images/blog/' . $filename);
       Image::make($image)->save($location);
       $post->image = $filename;
     }
     $post->save();

      return redirect()->route('posts.show', $post->id);
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::findOrFail($id);
      $post->delete();
      return redirect('/admin/posts');
    }

    public function getSingle($slug) {
      $post = Post::where('slug', '=', $slug)->first();
      return view('blog.single')->withPost($post);
    }
		public function getSingleAmp($slug) {
	    $post = Post::where('slug', '=', $slug)->first();
	    return view('amp.post')->withPost($post);
	  }

    public function postContactus(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'email'     => 'required|email',
        'phone'     => 'required',
        'body'      => 'required',
        'g-recaptcha-response' => 'required|captcha'
      ]);

      $data = array(
        'name' => $request->name,
        'email'     => $request->email,
        'phone'     => $request->phone,
        'body'      => $request->body
      );

      Mail::send('emails.notification', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('info@goborntomove.com');
        $message->subject('Contact Request');
      });

      return redirect('/contact-us');
    }

    public function sitemap()
    {
      $posts = Post::orderBy('updated_at', 'DESC')->get();
      return response()->view('sitemap', compact('posts'))->header('Content-Type', 'text/xml');
    }


}
