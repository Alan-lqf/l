<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/17
 * Time: 10:04
 */

namespace app\api\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定的主题不存在，请检查主题ID';
    public $errorCode = 30000;
}