<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Http\Requests\StoredoctorRequest;
use App\Http\Requests\UpdatedoctorRequest;
use App\Models\post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function __construct()
    {
        $this->middleware('auth')->only(["index", "create"]);
    }
    public function index()
    {
        return view('blog.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredoctorRequest $request)
    {
        $user_id = Auth::user()['id'];
        doctor::create([
            "doctor_name" => $request->doctor_name,
            "specialization" => $request->specialization,
            "email" => $request->email,
            "phone" => $request->phone,
            "doctor_image" => "tempo",
            "user_id" => $user_id
        ]);
        redirect()->route('admin.doctor');
    }

    /**
     * Display the specified resource.
     */
    public function show(doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedoctorRequest $request, doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctor $doctor)
    {
        //
    }
    public function doctor()
    {
        return view('blog.admin.doctors',[
            "posts" => doctor::orderBy('id', 'desc')->get(),
        ]);
        
    }
    public function appointment()
    {
        return view('blog.admin.appointment',[
            "posts" => post::orderBy('id', 'desc')->get(),
        ]);
        
    }
}
