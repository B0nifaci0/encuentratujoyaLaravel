<?php
namespace App;

use PayPal\Api\Amount;
use PayPal\Api\CreditCard;
use PayPal\Api\Details;
use PayPal\Api\FundingInstrument;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;

class PayPal{
    private $_apiContext;
    private $_ClientId = 'AV9Tt4nGuWTHfJKlITbQjMNeUJxkBk_WNmXTPVYfQjE7jrByZZe3vDsGqI1d18iruj11KO9Tf1v0oZSp';
    private $_ClientSecret = 'EJCakrnlbRAY4CYCZ_htIjtqgId3KRXMlLKGogmPYAsC4Kptzcm9q8864HkfbdFW74wYjhD0Gi65D3rO';

    private $subscription;
    private $credit_card;

    public function __construct($subscription, $credit_card = null){

      $this->_apiContext = \PaypalPayment::ApiContext($this->_ClientId,$this->_ClientSecret);

      $config = config("paypal_payment");
      $flatConfig = array_dot($config);

      $this->_apiContext->setConfig($flatConfig);

      $this->subscription = $subscription;
      $this->credit_card = $credit_card;
    }

    public function generate()
    {
      $payment = \PaypalPayment::payment()->setIntent("sale")
                    ->setPayer($this->payer())
                    ->setTransactions([$this->transaction()])
                    ->setRedirectUrls($this->redirectUrls());

      try{
        $payment->create($this->_apiContext);
      }catch(\Exception $ex){
        dd($ex);
        exit(1);
      }
      return $payment;
    }

    public function payer(){
      /*
      $card = new CreditCard();
      $card->setType($this->credit_card->type)
        ->setNumber($this->credit_card->number)
        ->setExpireMonth($this->credit_card->expire_month)
        ->setExpireYear($this->credit_card->expire_year)
        ->setCvv2($this->credit_card->cvv)
        ->setFirstName($this->credit_card->first_name)
        ->setLastName($this->credit_card->last_name);

      $fi = new FundingInstrument();
      $fi->setCreditCard($card);*/

      $payer = \PaypalPayment::payer()
              ->setPaymentMethod("paypal");
        //->setFundingInstruments(array($fi));

      return $payer;

      /*return
            ->setPaymentMethod("credit_card");*/
    }

    public function transaction(){
    return \PaypalPayment::transaction()
              ->setAmount($this->amount())
              ->setItemList($this->item())
              ->setDescription("Pago de cuenta premium Jewelry Palace")
              ->setInvoiceNumber(uniqid());
    }

    public function redirectUrls(){
      $baseURL = url('/');
      return \PaypalPayment::redirectUrls()
            ->setReturnUrl($baseURL . "/pagos/success")
            ->setCancelURL($baseURL . "/realizarpago");
    }

    public function amount(){
      return \PaypalPayment::amount()->setCurrency("MXN")
                            ->setTotal($this->subscription->total);
    }

    public function item(){
      return  \PaypalPayment::itemList()->setItems(array($this->subscription->makePayPalItem()));
    }


    public function execute($payment_id, $payer_id)
    {
      $payment = \PaypalPayment::getById($payment_id, $this->_apiContext);
      $execution = \PaypalPayment::PaymentExecution()
                            ->setPayerId($payer_id);
      $response = $payment->execute($execution, $this->_apiContext);
      return $response;
    }

}
