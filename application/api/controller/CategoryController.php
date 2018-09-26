<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/25
 * Time: 17:05
 */

namespace app\api\controller;


use app\api\exception\CategoryException;
use app\api\model\CategoryModel;
use think\Controller;

class CategoryController extends Controller
{
    public function getAllCategories()
    {
//        $categories = CategoryModel::all([], 'img');
        $categories = CategoryModel::with('img')->select();
        if ($categories->isEmpty()){
            throw new CategoryException();
        }
        return $categories;
    }

}