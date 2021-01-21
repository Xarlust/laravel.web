<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.products');

    }

    public function create()
    {
        return view('admin.product_editor');
    }

    public function store(Request $request)
    {
     $name=$request->get('name');
     $price=$request->get('price');
     $descriptione=$request->get('descriptione');

     return view('admin.products');
    }

    public function edit()
    {
        return view('admin.product_editor');
    }

    public function update(Request $request)
    {
        $name=$request->get('name');
        $price=$request->get('price');
        $descriptione=$request->get('descriptione');

        return view('admin.products');
    }

    public function delete()
    {
        return view('admin.products');
    }






}
