<?php

namespace App\Http\Controllers;

use App\Http\Requests\postFormRequest;
use App\Models\team;
use App\Http\Requests\StoreteamRequest;
use App\Http\Requests\UpdateteamRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
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
        return view('blog.admin.team', [
            "posts" => team::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.admin.create_team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreteamRequest $request)
    {
        $request->validated();
        $user_id = Auth::user()['id'];
        team::create([
            "name" => $request->name,
            "carrier" => $request->carrier,
            "phone" => $request->phone,
            "email" => $request->email,
            "image_path" => "tempo",
            "user_id" => $user_id
        ]);
        return redirect(route('team.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateteamRequest $request, team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team $team)
    {
        //
    }
}
