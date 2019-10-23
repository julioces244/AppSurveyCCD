<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{

    public function getCategories(){

      try{

        $category = Category::All();
        return $category;

        return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);

      }catch(\Exception $e){
          return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
      }

    }

    public function storeCategory(Request $request){

      try{

        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);

      }catch(\Exception $e){
          return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
      }



    }
}
