<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    //this function added by ajay
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof TokenMismatchException) {

            return response()->json(['error'=>'token mismatch','code'=>'419']);
           
            // return redirect()->route('error.419'); // Redirect to custom error page
            
        }
      
        return parent::render($request, $exception);
    }


}
