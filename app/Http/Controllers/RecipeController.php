<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Userrecipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{


    public function __construct(){
        $this->middleware("can:isAdmin")->only(['index','create','store','edit','update']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $allrecipe= Recipe::get();
       return view("admin.allrecipe",["data"=>$allrecipe]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.addrecipe");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeRequest $request)
    {
        $input=$request->all();
        $image=$request->file('photo');
        $imag_path=$image->store('/','recipes'); 
        $input['photo']=$imag_path;
        $input['video']=$request['video'];
        Recipe::create($input);
        return redirect('/recipe');

    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
       return view("user.recipedetails",["data"=>$recipe]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view("admin.updaterecipe",["data"=>$recipe]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        $input=$request->all();

        if($request->hasFile('photo'))
        {
            $image=$request->file('photo');
            $imag_path=$image->store('/','recipes'); 
            $input['photo']=$imag_path;
        }
        $recipe->update($input);
        return redirect("/recipe");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
       $recipe->delete();
       return redirect("/recipe");
    }
    public function addtorecipe(Userrecipe $userrecipe){
//   dd($userrecipe);
Recipe::create([
    'name'=>$userrecipe->name,
    'ingredients'=>$userrecipe->ingredients,
    'prepare'=>$userrecipe->prepare,
    'video'=>$userrecipe->video,
    'photo'=>$userrecipe->photo,
]);
$userrecipe->delete();

return redirect("/userrecipe");


    }
 
public function searchdata(Request $request){
   
    $recipe=Recipe::where('name', 'like', "%$request->search%")->get();
 
    return redirect("/search")->with('message',$recipe)->with('data',$request->search);
 
}
public function showingredients(){ 
    $allingredientList = $_GET["allingredientList"];
    $list=[];
    if($allingredientList != ""){

  
   
 foreach($allingredientList as $ingredient){
     
$listtwo=Recipe::where('ingredients', 'like', "%$ingredient%")->get();
 if(!($listtwo)->isEmpty())
  
 $list[]=$listtwo;
}
}else
{
    $list ="not match";
}

// $result =  array_map("unserialize", array_unique(array_map("serialize", $list)));


// $array=array_unique($list, SORT_REGULAR);
    return response()->json(['allingredientList' => $list]);

}

}
