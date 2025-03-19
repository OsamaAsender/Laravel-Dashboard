<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
       
        return view('products');
    }

    public function create()
    {
        return view(view: 'create');
        // return redirect()->route('products');
        
    }



    public function edit()
    {
     
        return view('edit');
    }

    // public function update()
    // {
       
    //     return '';
    // }

    // public function destroy($id)
    // {
       
    //     return redirect()->route('index');
    // }

    public function show()
    {
        
        return view('show');
    }
    public function store(){
        // $data= $_POST;
        // return $data;
        return to_route(route: 'store');

    }
}