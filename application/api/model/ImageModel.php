<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/11
 * Time: 19:01
 */

namespace app\api\model;


class ImageModel extends BaseModel
{
    protected $table = 'image';
    protected $hidden = ['id', 'from', 'update_time', 'delete_time'];


}