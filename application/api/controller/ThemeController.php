<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/17
 * Time: 9:30
 */

namespace app\api\controller;


use app\api\exception\ThemeException;
use app\api\model\ThemeModel;
use app\api\validate\IDCollection;
use app\api\validate\IDMustBePositiveInteger;
use think\Controller;

class ThemeController extends Controller
{
    /**
     * @url /theme?ids=id1,id2,id3,...
     * @return 一组theme模型
     */
    public function getSimpleList($ids='')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',', $ids);
        $result = ThemeModel::getThemeById($ids);
        if (!$result){
            throw new ThemeException();
        }
        return $result;
    }

    public function getComplexOne($id)
    {
        (new IDMustBePositiveInteger())->goCheck();
        $theme = ThemeModel::getThemeWithProducts($id);
        if (!$theme){
            throw new ThemeException();
        }
        return $theme;
    }
}