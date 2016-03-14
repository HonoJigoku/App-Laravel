<?php

namespace App\Cart;

interface IStorage {
    function setValue($id, $total, $price, $quantity);
    function getValue($id);
    function reset();
    function restore($id);
    function total();
    function getProduct();
}