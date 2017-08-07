<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store()
    {
        return back()->with('message', 'The product was successfully created!');
    }
}
