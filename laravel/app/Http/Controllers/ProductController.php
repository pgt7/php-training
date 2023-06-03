<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all the products
        $products = Product::all();

        // load the view and pass the products
        return View::make('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // load the create form (app/views/products/create.blade.php)
        return View::make('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'product_name'       => 'required',
            'price'      => 'required',
            'description' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect()->to('products/create')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $product = new Product;
            $product->product_name = $request->get('product_name');
            $product->price = $request->get('price');
            $product->description = $request->get('description');
            $product->save();

            // redirect
            $request->session()->flash('message', 'Successfully created shark!');
            return redirect()->to('products');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // get the product
        $product = Product::find($id);

        // show the view and pass the product to it
        return View::make('products.show')
            ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // get the product
        $product = Product::find($id);

        // show the edit form and pass the product
        return View::make('products.edit')
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'product_name'       => 'required',
            'price'      => 'required',
            'description' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect()->to('sharks/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $product = Product::find($id);
            $product->product_name = $request->get('product_name');
            $product->price = $request->get('price');
            $product->description = $request->get('description');
            $product->save();

            // redirect
            $request->session()->flash('message', 'Successfully updated shark!');
            return redirect()->to('products');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // delete
        $product = Product::find($id);
        $product->delete();

        // redirect
        $request->session()->flash('message', 'Successfully deleted the Product!');
        return redirect()->to('products');
    }

    /**
     * Show the form for comapring the specified resource.
     */
    public function compare(string $id) 
    {
        // get all the products
        $products = Product::all();
        
        foreach ($products as $index => $product) {

            // remove the specific element
            if($product->id == $id){
                unset($products[$index]);
            }
        }

        // find the selected product
        $product = Product::find($id);

        // show the view and pass the product to it
        return View::make('products.compare')
            ->with('products', $products)
            ->with('selected_product', $product);
    }

    /**
     * Compare the specified resource in storage.
     */
    public function compilation(string $first_id, string $second_id)
    {
        // find the first product
        $first_product = Product::find($first_id);

        // find the second product
        $second_product = Product::find($second_id);

        // show the view and pass the products to it
        return View::make('products.compilation')
            ->with('first_product', $first_product)
            ->with('second_product', $second_product);
    }
}
