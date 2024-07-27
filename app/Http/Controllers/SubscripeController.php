<?php

namespace App\Http\Controllers;

use App\Models\Subscripe;
use App\Http\Requests\StoreSubscripeRequest;
use App\Http\Requests\UpdateSubscripeRequest;
use Illuminate\Support\Facades\Auth;

class SubscripeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscripe=Subscripe::get();
        return view('admin.subscription',["data"=>$subscripe]);
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
    public function store(StoreSubscripeRequest $request)
    { 
          $mail=Subscripe::where("email",$request['email'])->get();
          if(!($mail)->isEmpty()){
            return redirect("/about")->withSuccess('This Email Already Subscriped    ');
          }
        if (Auth::check()) {
         
             $name=auth()->user()->name;
        }else{
            $name="new user";
        }
        Subscripe::create([
'name'=>$name,
"email"=>$request['email']
        ]);
        return redirect("/about")->withSuccess('Thank you for Subscription ');

    }

    /**
     * Display the specified resource.
     */
    public function show(Subscripe $subscripe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscripe $subscripe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscripeRequest $request, Subscripe $subscripe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscripe $subscripe)
    {
        //
    }
}
