<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/25
 * Time: 20:08
 */

namespace app\api\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定类目不存在，请检查参数';
    public $errorCode = 50000;
}