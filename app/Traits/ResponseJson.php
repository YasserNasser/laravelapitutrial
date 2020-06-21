<?php

namespace App\Traits;

trait ResponseJson
{
    public function getCurrentLang()
    {
        return app()->getLocale();
    }

    public function returnError($code, $msg)
    {
        return response()->json([
            'status' => false,
            'code' => $code,
            'msg'    =>$msg
        ]) ;
    }

    public function returnSuccessMessage($msg = "",$code = "201")
    {
        return response()->json([
            'status' => true,
            'code' => $code,
            'msg'    =>$msg
        ]) ;
    }
    
    public function returnData($key,$value,$code = "200", $msg = "")
    {
        return response()->json([
            'status' => true,
            'code' => $code,
            'msg'    =>$msg,
            $key => $value
        ]) ;
    }


    public function getCurrentLang2()
    {
        return app()->getLocale();
    }


    public function getCurrentLang3()
    {
        return app()->getLocale();
    }


    public function getCurrentLang4()
    {
        return app()->getLocale();
    }




}