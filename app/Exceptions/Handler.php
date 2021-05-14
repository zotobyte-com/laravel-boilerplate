<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $e)
    {
        $rendered = parent::render($request, $e);

        //for json request only
        if( $request->is('api/*')){
            // for validation error
            if ($e instanceof ValidationException) {
                $err = array();
                foreach ($e->errors() as $key => $value) {
                    $err[] =  (object) ["key" => $key, "message" => $value[0]];
                }

                $data = [
                    'status' => 422,
                    'message' => $e->getMessage(),
                    'error' => $err
                ];
                return response()->json($data,200);
            }
            // for all other exceptions
            return response()->json([
                "status" => $rendered->getStatusCode(),
                'error' => [
                    'message' => $e->getMessage(),
                ]
            ], $rendered->getStatusCode());

        }

        return $rendered;
    }
}
