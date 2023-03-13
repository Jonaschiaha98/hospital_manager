<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use App\Models\doctor;
use App\Models\team;
use App\Models\testimony;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth')->only(["index", "store"]);
    }
    public function index()
    {
        // $posts = post::orderBy('id','desc')->get();
        // // dd();
        $x = post::orderBy('id','desc')->paginate(3);
        // die(json_encode($x));
        return view('blog.user.index', [
            "posts" => post::orderBy('id','desc')->where('user_id', Auth::user()['id'])->paginate(5),
            "doctors" => doctor::orderBy('id','desc')->get(),
            "teams" => team::orderBy('id','desc')->get(),
            "testimoniess" => testimony::orderBy('id','desc')->get(),
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostRequest $request)
    {
        $request->validated();
        $user_id = Auth::user()['id'];
        post::create([
            "patient_name" => $request->patient_name,
            "phone" => $request->phone,
            "app_date" => $request->app_date,
            "email" => $request->email,
            "doctor_name" => $request->doctor_name,
            "status" => $request->status,
            "user_id" => $user_id
        ]);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
