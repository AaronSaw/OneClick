<?php

namespace App\Http\Controllers;

use App\Contracts\Services\CategoryApi\CategoryApiServiceInterface;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    private $categoryapiInterface;

    public function __construct(CategoryApiServiceInterface $categoryapiServiceInterface)
    {
        $this->categoryapiInterface = $categoryapiServiceInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categoryapiInterface->getIndex();
        return response()->json($categories);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->categoryapiInterface->getShow($id);
        if (is_null($category)) {
            return response()->json(["message" => "Category is not found"], 404);
        }
        return  response()->json($category);
    }
}
