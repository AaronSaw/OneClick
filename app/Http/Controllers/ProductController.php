<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Contracts\Services\Product\ProductServiceInterface;

class ProductController extends Controller
{

    private $productInterface;

    public function __construct(ProductServiceInterface $productServiceInterface)
    {
        $this->productInterface = $productServiceInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productInterface->getIndex();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->productInterface->getCreate();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $this->productInterface->getStore($request);
        return redirect()->route('product.index')->with('status', "Product is add successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return   abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = $this->productInterface->getCreate();
        return view('product.edit', compact(['product', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $this->productInterface->getUpdate($request, $product);
        return redirect()->route('product.index')->with('status', "Product is updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->productInterface->getDelete($product);
        return redirect()->route('product.index')->with('status', "Product is deleted successfully");
    }

    /**
     *
     * @param  $id
     * @return $detial and relatedCategories
     */
    public function detail($id)
    {
        $detail =  $this->productInterface->getDetail($id);
        $relatedId = $detail[0]->category_id;
        $relatedCategories =  $this->productInterface->getRelatedDetail($id, $relatedId);
        return view('detail', compact(['detail', 'relatedCategories']));
    }

    /**
     * To show order Page
     * @param id
     * @return view
     */
    public function orderPage($id)
    {
        $order =  $this->productInterface->getDetail($id);
        return view('orderPage', compact('order'));
    }

    /**
     * To store data
     * @param request
     * @return redirect
     */
    public function orderStore(Request $request, $id)
    {
        $data=$this->productInterface->orderStorePost($request, $id);
        if($data){
            return redirect()->route('user.order', $id)
            ->with('success_status', 'Your Order Is Confirmed.And Order Mail was sent.');
        }else{
            return back()->with('error_status','Admin cannot order product.');
        }
    }
}
