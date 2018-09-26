<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/25
 * Time: 16:30
 */

namespace app\api\controller;


use app\api\exception\ProductException;
use app\api\model\ProductModel;
use app\api\validate\Count;
use app\api\validate\IDMustBePositiveInteger;
use think\Controller;

class ProductController extends Controller
{
    public function getRecent($count=15)
    {
        (new Count())->goCheck();
        $products = ProductModel::getMostRecent($count);
        if ($products->isEmpty()){
            throw new ProductException();
        }
        $products = $products->hidden(['summary']);
        return $products;
    }

    public function getAllInCategory($id)
    {
        (new IDMustBePositiveInteger())->goCheck();
        $products = ProductModel::getProductsByCategoryID($id);
        if ($products->isEmpty()){
            throw new ProductException();
        }
        $products = $products->hidden(['summary']);
        return $products;
    }
}