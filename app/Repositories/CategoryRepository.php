<?php


namespace App\Repositories;


use App\Category;

class CategoryRepository
{
public function all()
{
    return Category::all();
}
}
