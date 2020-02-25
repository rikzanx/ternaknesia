<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
class ProductController extends Controller
{
    //
    public function index()
    {
        $product = Users::all();
        foreach ($product as $p) {
            $p->store;
        }
        return $product;
    }
}
