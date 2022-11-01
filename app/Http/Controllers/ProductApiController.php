<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ProductApi\ProductApiServiceInterface;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    private $productapiInterface;

    public function __construct(ProductApiServiceInterface $productapiServiceInterface)
    {
        $this->productapiInterface = $productapiServiceInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productapiInterface->getIndex();
        return response()->json($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productapiInterface->getShow($id);
        if (is_null($product)) {
            return response()->json(["message" => "Product is not found"], 404);
        }
        return response()->json($product);
    }
}
