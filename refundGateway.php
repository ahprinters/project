<?php

interface RefundGateway {
    public function processRefund(float $amount): bool;
}
?>
