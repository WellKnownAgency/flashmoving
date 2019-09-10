<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
use Image;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::latest()->paginate(10);
        return view('admin.prices.index')->withPrices($prices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
     $this->validate($request, array(
        'name'         => 'required|max:255',
        'price'          => 'required|max:255',
    ));
    // store in the database
    $price = new Price;
    $price->name = $request->name;
    $price->price = $request->price;

    $price->save();

    return redirect()->route('prices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = Price::find($id);
        return view('admin.prices.edit')->withPrice($price);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // store in the database
     $price = Price::find($id);
     $price->name = $request->input('name');
     $price->price = $request->input('price');
     $price->save();

      return redirect()->route('prices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
