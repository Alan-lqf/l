<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/25
 * Time: 16:40
 */

namespace app\api\exception;


class ProductException extends BaseException
{
    public $code = 404;
    public $msg = '指定的商品不存在，请检查参数';
    public $errorCode = 20000;
}