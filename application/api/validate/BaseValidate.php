<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2018/9/11
 * Time: 18:28
 */

namespace app\api\validate;


use app\api\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{

    public function goCheck()
    {
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);

        if (!$result){
            throw new ParameterException([
                'msg' => $this->error,
                'errorCode' => 10002
            ]);
        }else{
            return true;
        }
    }

    protected function isPositiveInteger($value){
        if (is_numeric($value) && is_int($value + 0) && is_int($value + 0) > 0){
            return true;
        }else{
            return false;
        }
    }
}