<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyPaymentValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $signature = $request->header('x-signature');
        $requestId = $request->header('x-request-id');
        $data = $request->input();


        $signatureParts = explode(',', $signature);
        $signatureTs = explode('=', $signatureParts[0])[1];
        $signatureKey = explode('=', $signatureParts[1])[1];

        $validationKey = "id:" . $data['data']['id'] . ";request-id:" . $requestId . ";ts:" . $signatureTs . ";";

        $hashedKey = hash_hmac('sha256', $validationKey, config('mercadopago.secret_key'));

        if($signatureKey === $hashedKey){

           return $next($request);
        }else{
            abort(422);
        }
    }
}
