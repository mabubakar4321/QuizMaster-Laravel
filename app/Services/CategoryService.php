<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    public $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository=$categoryRepository;
    }
    public function addcategories($request){
       return  $this->categoryRepository->addcategories($request);
    }
    public function showcategory(){
        return $this->categoryRepository->showcategory();
    }
    public function deletecategory($id){
        return $this->categoryRepository->deletecategory($id);
    }

    public function editcateogry($id){
        return $this->categoryRepository->editcateogry($id);
    }
    public function updatecategory($request,$id){
        return $this->categoryRepository->updatecategory($request,$id);
    }

    public function addquize(){
        return $this->categoryRepository->addquize();
    }
    public function addquizesss($request){
        return $this->categoryRepository->addquizesss($request);
    }
    public function showquizzes(){
        return $this->categoryRepository->showquizzes();
    }
    public function deletequizes($id){
        return $this->categoryRepository->deletequizes($id);
    }
    public function updatequiz($id){
        return $this->categoryRepository->updatequiz($id);
    }
    public function updateallquiz($request,$id){
        return $this->categoryRepository->updateallquiz($request,$id);
    }
}
