<?php

namespace App\Enums;

enum AddressType
{
    case Shipping = 'shipping';
    case Billing = 'billing';
}
