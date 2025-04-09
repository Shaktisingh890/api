<?php 

namespace App\Http\Helpers;

class ApiResponse
{
    public static function success($code = 200, $message = 'Success',$data=null )
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public static function error($code = 500,$message = 'Something went wrong',$data = null)
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}

















?>