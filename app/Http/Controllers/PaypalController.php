<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Paypal;

class PaypalController extends Controller
{

    private $_apiContext;
    private $_subscription;

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

	$this->_subscription = new SubscriptionController();
    }

    public function getCheckout(Request $request) {
    	   $plan_id = $request->input('plan_id');
           $card_id = $request->input('card_id');
    	   $payer = PayPal::Payer();
        $payer->setPaymentMethod('paypal');

	    $amount = PayPal::Amount();
	    $amount->setCurrency('EUR');
	    $amount->setTotal($request->input('pay'));

	    $transaction = PayPal::Transaction();
	    $transaction->setAmount($amount);
	    $transaction->setDescription('Buy a subscription for a '.$request->input('duration')."\n".'It\'s cost '.$request->input('pay').' euros');

	    $redirectUrls = PayPal::RedirectUrls();
	    $redirectUrls->setReturnUrl(route('done', [
	    "plan_id" => $plan_id,
	    "card_id" => $card_id,
	    ]));
	    $redirectUrls->setCancelUrl(route('cancel'));

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
	    $card_id = $request->get('card_id');
        $plan_id = $request->get('plan_id');
        $card_id = SecurityController::encrypt('decrypt', $card_id);

	    $payment = PayPal::getById($id, $this->_apiContext);

	    $paymentExecution = PayPal::PaymentExecution();

	    $paymentExecution->setPayerId($payer_id);
	    $executePayment = $payment->execute($paymentExecution, $this->_apiContext);

	    $this->_subscription->registerUserSubscription($id, $plan_id, $card_id);
	    return redirect()->route('homepage');
	}

	public function getCancel() {
	    return redirect()->route('/');
	}
}
