<?php

namespace App\Http\Controllers;

use DB;
use App\FoodPrice;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodprices = DB::table('ap_copi')
                ->selectRaw('ap_states.state, AVG(steak) AS Steak, AVG(grnd_beef) AS Ground_Beef, AVG(sausage) AS Sausage, AVG(fry_chick) AS Fried_Chicken, AVG(tuna) AS Tuna')
                ->join('ap_states', 'ap_copi.state_id', '=', 'ap_states.id')
                ->groupBy('state_id')
                ->get();

        return $foodprices;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FoodPrice  $foodPrice
     * @return \Illuminate\Http\Response
     */
    public function show(FoodPrice $foodPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FoodPrice  $foodPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodPrice $foodPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FoodPrice  $foodPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodPrice $foodPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FoodPrice  $foodPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodPrice $foodPrice)
    {
        //
    }
}
