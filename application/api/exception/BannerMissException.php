<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/26
 * Time: 9:37
 */

namespace app\api\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}