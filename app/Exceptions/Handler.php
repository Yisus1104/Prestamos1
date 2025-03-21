<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        // Si el error es una excepción 404 (página no encontrada)
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('Error', [], 404);
        }

        // Puedes manejar otros tipos de errores si es necesario
        // Ejemplo para errores 500
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException && $exception->getStatusCode() == 500) {
            return response()->view('Error', [], 500);
        }

        // Deja que Laravel maneje otros errores como siempre
        return parent::render($request, $exception);
    }
}
