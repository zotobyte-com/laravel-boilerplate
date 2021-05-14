<?php


use Illuminate\Http\Response;


function responseBuilder($status = '', $data = [], $info = null)
{
    if ($data) {
        $response = [
            "status" => $status,
            "message" => $info ? $info : Response::$statusTexts[$status],
            "data" => $data
        ];
    } else {
        $response = [
            "status" => $status,
            "message" => $info ? $info : Response::$statusTexts[$status],
        ];
    }


    return response()->json($response);
}
