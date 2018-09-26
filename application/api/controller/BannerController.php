<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/11
 * Time: 18:19
 */

namespace app\api\controller;


use app\api\exception\BannerMissException;
use app\api\model\BannerModel;
use app\api\validate\IDMustBePositiveInteger;
use think\Controller;

class BannerController extends Controller
{
    public function index(){
        echo "ok,zerg";
    }

    public function getBanner($id)
    {
        (new IDMustBePositiveInteger())->goCheck();
        $banner = BannerModel::getBannerByID($id);
        if ($banner->isEmpty()){
            throw new BannerMissException();
        }
        return $banner;
    }
}