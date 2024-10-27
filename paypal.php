 <?php
include_once 'paymentGateway.php';
class paypal implements PaymentGateway
{
    public function processPayment(float $amount): bool 

    {
        echo "Processing a payment of $amount via PayPal..."; 
        return true;
    }  
} 
