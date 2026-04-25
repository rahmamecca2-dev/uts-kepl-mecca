<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    protected $model;

    public function __constuct(Category $model)
    {
        $this->model = $model;
    }

    public function list()
    {
        return Category::all();
    }
}
