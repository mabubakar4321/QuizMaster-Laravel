<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Quizze;

class CategoryRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function addcategories($request){
        return Category::create([
            'name'=>$request->name,
        ]);
    }

    public function showcategory(){
       return  Category::all();

    }
    public function deletecategory($id){
      
        $category=Category::find($id);
       if($category){
        $category->delete();
        return true;
       }else{
        return false;
       }
    }

    public function editcateogry($id){
       return  Category::find($id);
    }
    public function updatecategory($request,$id){
        $category=Category::findOrFail($id);

        if($category){
$category->update(['name'=>$request->name]);
return true;
        }else{
 return  false;
        }
       
    }

    public function  addquize(){
       return  $category=Category::all();
        
    }
    public function addquizesss($request){
        return Quizze::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
        ]);
    }

    public function showquizzes(){
        return Quizze::all();
    }
    public function deletequizes($id){
        $quiz=Quizze::findOrFail($id);
        if($quiz){
            $quiz->delete();
            return true;
        }else{
            return false;
        }
    }

    public function updatequiz($id){
        return Quizze::findOrFail($id);

    }
    public function updateallquiz($request,$id){
        $quiz=Quizze::findOrFail($id);
        if($quiz){
            $quiz->update([
                'name'=>$request->name,
                'category_id'=>$request->category_id,
            ]);
             return true;
           
        }else{
            return false;
        }
    }
}
