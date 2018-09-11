<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/11
 * Time: 18:28
 */

namespace app\api\validate;


class IDMustBePositiveInteger extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];
}