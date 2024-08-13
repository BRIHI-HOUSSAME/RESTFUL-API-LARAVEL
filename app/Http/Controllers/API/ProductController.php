<?php

namespace App\Http\Controllers\API;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
            $product= Product::get();
    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function update()
    {

    }
    public function destroy()
    {

    }

}
