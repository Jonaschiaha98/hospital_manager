<?php

namespace App\Http\Controllers;

use App\Models\testimony;
use App\Http\Requests\StoretestimonyRequest;
use App\Http\Requests\UpdatetestimonyRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth')->only(["index", "create"]);
    }
    public function index()
    {
        return view('blog.admin.test',[
            "posts" => testimony::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.admin.create_testimony');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretestimonyRequest $request)
    {
        $user_id = Auth::user()['id'];
        testimony::create([
            "name" => $request->name,
            "testimony" => $request->testimony,
            "image_path" => "tempo",
            "user_id" => $user_id
        ]);
        redirect(route('admin.testimony'));
    }

    /**
     * Display the specified resource.
     */
    public function show(testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimony $testimony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetestimonyRequest $request, testimony $testimony)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testimony $testimony)
    {
        //
    }
}
