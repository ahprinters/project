<?php
class PaymentGateway
{
    private PaymentGateway $gateway;
    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;  // 1    
    }
    public function process(float $amount): bool
    {
        $this->gateway->processPayment($amount);
        return true;
    }
}
$paymentStripe = new PaymentGateway(new Stripe());
$paymentPaypal = new PaymentGateway(new Paypal());