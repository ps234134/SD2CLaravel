<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cars = Car::all();
       return view('index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validation for required fields (and using some regex to validate our numeric value)
         $request->validate([
            'merk'=>'required',
            'type'=>'required',
            'bouwjaar'=>'required'
        ]);
        // Getting values from the blade template form
        $stock = new Car([
            'merk' => $request->get('merk'),
            'type' => $request->get('type'),
            'bouwjaar' => $request->get('bouwjaar'),
        ]);
        $stock->save();
        return redirect('/home')->with('success', 'Car saved.');   // -> resources/views/stocks/index.blade.php
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
        $cars = Car::find($id);
        return view('cars.edit',['cars' => $cars]);
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
        $request->validate([
            'merk'=>'required',
            'type'=>'required','[0-9]+',
            'bouwjaar'=>'required'
        ]);

        $cars = Car::find($id);
        $cars->merk = $request->get('merk');
        $cars->type = $request->get('type');
        $cars->bouwjaar = $request->get('bouwjaar');
        $cars->save();
        return redirect('/home')->with('success', 'Car updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Car::find($id);
        $cars->delete();
        return redirect('/home')->with('success', 'Car deleted.');
    }
}
