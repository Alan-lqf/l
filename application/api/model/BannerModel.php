<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/11
 * Time: 18:45
 */

namespace app\api\model;


class BannerModel extends BaseModel
{

    protected $table = 'banner';
    protected $hidden = ['update_time', 'delete_time'];

    public function items()
    {
        return $this->hasMany('BannerItemModel', 'banner_id', 'id');
    }


    public static function getBannerByID($id)
    {
        //TODO select与find
//        $banner = self::with(['items', 'items.img'])->select($id);
        $banner = self::with(['items', 'items.img'])->find($id);//知道查询结果只有一条时还是用find比较好
        return $banner;
    }
}