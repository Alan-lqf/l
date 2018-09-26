<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/25
 * Time: 17:09
 */

namespace app\api\model;


class CategoryModel extends BaseModel
{
    protected $table = 'category';
    protected $hidden = ['update_time', 'delete_time'];

    public function img()
    {
        return $this->belongsTo('ImageModel', 'topic_img_id', 'id');
    }
}