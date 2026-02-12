<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class CartHelper
{
    public static function isInCart($itemId)
    {
        $cart = Session::get('cart', []);
        return in_array($itemId, array_column($cart, 'id'));
    }
    
    public static function isInWishlist($itemId)
    {
        $wishlist = Session::get('wishlist', []);
        return in_array($itemId, array_column($wishlist, 'id'));
    }
    
    public static function isInWishlists($itemId)
    {
        $wishlist = Session::get('wishlist', []);
        return in_array($itemId, array_column($wishlist, 'id'));
    }
    
}
