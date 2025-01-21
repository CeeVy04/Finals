<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
  
        return view('products.index', compact('product'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Validate the incoming request
    $validated = $request->validate([
        'title' => 'required|string|max:255',  // Ensure title is required and a string with max length of 255 characters
        'price' => 'required|numeric',         // Ensure price is required and a number
        'product_code' => 'required|string|max:255', // Ensure product_code is required and a string
        'description' => 'nullable|string',    // Description is optional, but must be a string if provided
    ]);

    // Create the product with validated data
    Product::create($validated);

    // Redirect to the products list with a success message
    return redirect()->route('products.index')->with('success', 'Product added successfully!');
}

  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'Product updated successfully!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'Product deleted successfully!');
    }
}
