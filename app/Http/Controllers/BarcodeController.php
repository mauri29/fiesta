<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BarcodeController extends Controller
{
	public function index()
	{
		$productto = Product::all(["title", "price"]);
		return view('barcode')->with('productto', $productto);
	}
}