<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/11
 * Time: 18:50
 */

namespace app\api\model;


class BannerItemModel extends BaseModel
{
    protected $table = 'banner_item';
    protected $hidden = ['id', 'img_id', 'banner_id', 'update_time', 'delete_time'];

    public function img()
    {
        return $this->belongsTo('ImageModel', 'img_id', 'id');
    }
}