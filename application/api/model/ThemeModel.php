<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/17
 * Time: 9:54
 */

namespace app\api\model;


class ThemeModel extends BaseModel
{
    protected $table = 'theme';
    protected $hidden = ['top_img_id', 'head_img_id', 'update_time', 'delete_time'];

    public function topicImg()
    {
        return $this->belongsTo('ImageModel' ,'topic_img_id', 'id');
    }

    public function headImg()
    {
        return $this->belongsTo('ImageModel', 'head_img_id', 'id');
    }
    
    public static function getThemeById($ids)
    {
        $theme = self::with(['topicImg', 'headImg'])->select($ids);
        return $theme;
    }
    
}