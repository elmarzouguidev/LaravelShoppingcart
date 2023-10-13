<?php

namespace Elmarzouguidev\Shoppingcart\Contracts;

use Elmarzouguidev\Shoppingcart\CartItem;

interface Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem);
}
