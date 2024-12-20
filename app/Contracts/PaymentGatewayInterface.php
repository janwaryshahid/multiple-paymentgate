<?php
namespace App\Contracts;
interface PaymentGatewayInterface
{
public function charge(array $cart);
}
?>