<?php
include_once 'paymentGateway.php';
include_once 'refundGateway.php';
class stripe implements PaymentGateway, RefundGateway
{
    public function processPayment(float $amount): bool
    {
        echo "Processing a payment of $amount via Stripe...";
        return true;
    }

    public function processRefund(float $amount): bool
    {
        echo "Processing a refund of $amount via Stripe...";
        return true;
    }
}
$s1 = new stripe();
$s1->processPayment(100.50);
echo PHP_EOL;
$s1->processRefund(50.25);