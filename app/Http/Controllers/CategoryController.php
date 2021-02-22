<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Category;

class ProductController extends BaseController
{
    private $category; 

    public function __construct (Product $product) {

        $this->category = $category; 
    }

    public function index () {

        return $this->category->paginate(10);
    }

    public function show ($productId) {
        
        return $this->category->findOrFail($productId);
    }

    public function store (Request $request) {

            $this->category->create($request->all());

            return response()
                ->json(['data' => [ 
                    'message' => 'Success in create category']
                ]);
        
    }

    public function update ($category) {

        $categoryInfo = $this->category->find($category);
        $categoryInfo->update($request->all());

        return response()
            ->json(['data' => [ 
                    'message' => 'Success in update category']
                ]);
    }

    public function destroy ($category) {

        $categoryInfo = $this->category->find($category);
        $categoryInfo->delete();

        return response()->json(
            ['data' => [ 
                'message' => 'Success in remove category']
            ]
        );
    }
}
