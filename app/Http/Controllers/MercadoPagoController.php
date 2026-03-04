<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

class MercadoPagoController extends Controller
{
    public function index($id){
        try {

            MercadoPagoConfig::setAccessToken(config('mercadopago.access_token'));

            $membership = Membership::findOrFail($id);


            $item = [];

            $item [] = [
                'title' => $membership->name,
                'unit_price' => $membership->price,
                'quantity' => 1
            ];

            $preferenceFactory = new PreferenceClient();
            $preference = $preferenceFactory->create([
            'items'=> $item,
            'back_urls' => [
                'success' => 'https://gauzily-gentil-season.ngrok-free.dev/checkout/success',
                'failure' => route('checkout.failure'),
            ],
            'auto_return' => 'approved',
            ]);

            return view('checkout', [
                'membership' => $membership,
                'preference' => $preference,
                'MPPublicKey' => config('mercadopago.public_key'),
            ]);
        } catch (\MercadoPago\Exceptions\MPApiException $e) {
            echo $e->getApiResponse()->getContent()['message'];
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function confirmPayment(Request $request){

    Log::info('El pago fue validado');

    }

    public function success(Request $request){
        dd($request->input());
    }

    public function failure(Request $request){
        dd($request->input());
    }
}
