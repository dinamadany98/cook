<?php

namespace App\Http\Controllers;

use App\Models\Userrecipe;
use App\Http\Requests\StoreUserrecipeRequest;
use App\Http\Requests\UpdateUserrecipeRequest;

class UserrecipeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userrecipes=Userrecipe::get();
        return view("admin.userrecipe",["data"=>$userrecipes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("user.userRecipe");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserrecipeRequest $request)
    {
        $input=$request->all();
        $input["user_id"]=auth()->user()->id;
        $image=$request->file('photo');
        $imag_path=$image->store('/','recipes'); 
        $input['photo']=$imag_path;
        $input['video']=$request['video'];
        Userrecipe::create($input);
        return redirect('/contact')->withSuccess('Thank you we recive your Recipe ');

    }

    /**
     * Display the specified resource.
     */
    public function show(Userrecipe $userrecipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Userrecipe $userrecipe)
    {
         return view("admin.updateuserrecipe",["data"=>$userrecipe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserrecipeRequest $request, Userrecipe $userrecipe)
    {
        $input=$request->all();

        if($request->hasFile('photo'))
        {
            $image=$request->file('photo');
            $imag_path=$image->store('/','recipes'); 
            $input['photo']=$imag_path;
        }
        $userrecipe->update($input);
        return redirect("/userrecipe");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Userrecipe $userrecipe)
    {
      $userrecipe->delete();
      return redirect("/userrecipe");
    }
}
