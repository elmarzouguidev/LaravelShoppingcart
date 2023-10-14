<?php

namespace Elmarzouguidev\Tests\Shoppingcart;

use Elmarzouguidev\Shoppingcart\Cart;
use PHPUnit\Framework\Assert as PHPUnit;

trait CartAssertionsTestTrait
{
    /**
     * Assert that the cart contains the given number of items.
     *
     * @param int|float                     $items
     * @param \Elmarzouguidev\Shoppingcart\Cart $cart
     */
    public function assertItemsInCart($items, Cart $cart)
    {
        $actual = $cart->count();

        PHPUnit::assertEquals($items, $cart->count(), "Expected the cart to contain {$items} items, but got {$actual}.");
    }

    /**
     * Assert that the cart contains the given number of rows.
     *
     * @param int                           $rows
     * @param \Elmarzouguidev\Shoppingcart\Cart $cart
     */
    public function assertRowsInCart($rows, Cart $cart)
    {
        $actual = $cart->content()->count();

        PHPUnit::assertCount($rows, $cart->content(), "Expected the cart to contain {$rows} rows, but got {$actual}.");
    }
}
