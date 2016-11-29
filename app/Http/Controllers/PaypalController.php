<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Paypal;

class PaypalController extends Controller
{

    private $_apiContext;

    public function __construct() {
        $this->_apiContext = PayPal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));

        $this->_apiContext->setConfig(array(
            'mode' => 'sandbox',
            'service.EndPoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ));

    }

    public function payPremium() {
        $plans = DB::table('plans')->get();
    	return view('subscription.plans', [
            'plans' => $plans,
        ]);
    }

    public function getCheckout(Request $request) {
	    $payer = PayPal::Payer();
	    $payer->setPaymentMethod('paypal');

	    $amount = PayPal:: Amount();
	    $amount->setCurrency('EUR');
	    $amount->setTotal($request->input('pay'));

	    $transaction = PayPal::Transaction();
	    $transaction->setAmount($amount);
	    $transaction->setDescription('Buy a subscription for a '.$request->input('duration')."\n".'It\'s cost '.$request->input('pay').' euros');

	    $redirectUrls = PayPal:: RedirectUrls();
	    $redirectUrls->setReturnUrl(route('getDone'));
	    $redirectUrls->setCancelUrl(route('getCancel'));

	    $payment = PayPal::Payment();
	    $payment->setIntent('sale');
	    $payment->setPayer($payer);
	    $payment->setRedirectUrls($redirectUrls);
	    $payment->setTransactions(array($transaction));

	    $response = $payment->create($this->_apiContext);
	    $redirectUrl = $response->links[1]->href;

	    return redirect()->to( $redirectUrl );
	}

	public function getDone(Request $request) {
	    $id = $request->get('paymentId');
	    $token = $request->get('token');
	    $payer_id = $request->get('PayerID');

	    $payment = PayPal::getById($id, $this->_apiContext);

	    $paymentExecution = PayPal::PaymentExecution();

	    $paymentExecution->setPayerId($payer_id);
	    $executePayment = $payment->execute($paymentExecution, $this->_apiContext);

        $this->_userSubscribed($id, $payer_id);
        return redirect()->route('homepage');
	}

	public function getCancel() {
	    return redirect()->route('payPremium');
	}

    private function _userSubscribed($payment_id, $payer_id) {
        return DB::table('billing')->insert([
            'payment_id' => $payment_id,
            'users_id' => Auth::user()->id,
            'cards_id' => 0,
            'payment_mode' => 'paypal',
            'made_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
