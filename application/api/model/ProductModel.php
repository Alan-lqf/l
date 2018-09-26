<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/25
 * Time: 14:40
 */

namespace app\api\model;


class ProductModel extends BaseModel
{
    protected $table = 'product';
    protected $hidden = ['create_time', 'update_time', 'delete_time', 'category_id', 'pivot', 'from'];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }

    public static function getMostRecent($count)
    {
        $products = self::limit($count)
                            ->order('create_time desc')
                            ->select();
        return $products;
    }

    public static function getProductsByCategoryID($categoryID)
    {
        $products = ProductModel::where('category_id', '=', $categoryID)
            ->select();
        return $products;
    }

}