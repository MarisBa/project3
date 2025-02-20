<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;


class TestController extends Controller
{
    public function index()
    {
        return "hello";
    }



    public function register(){
        return 'register page';  // Assuming you have a 'account/register.blade.php' view
    }
    
    public function login(){
        return 'login page';  // Assuming you have a 'account/login.blade.php' view
    }
    
    public function product()
    {
        $products = ['name' => 'iPhone', 'price' => 799];
        return view('home', compact('products'));  // Ensure 'home.blade.php' can handle $products
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
