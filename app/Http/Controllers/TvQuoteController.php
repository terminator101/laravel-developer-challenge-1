<?php

namespace App\Http\Controllers;

use App\TvQuote;
use Illuminate\Http\Request;

class TvQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display 5 quotes per page
        $tvquotes = TvQuote::latest()->paginate(5);

        return view('tvquotes.index', compact('tvquotes'))
                ->with('t', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tvquotes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tv_series' => 'required',
            'season' => 'required|integer',
            'episode' => 'required',
            'quote' => 'required'
        ]);

        TvQuote::create($request->all());

        return redirect()->route('tvquotes.index')
                        ->with('success','TV Quote stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TvQuote  $tvquote
     * @return \Illuminate\Http\Response
     */
    public function show(TvQuote $tvquote)
    {
        return view('tvquotes.show',compact('tvquote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TvQuote  $tvquote
     * @return \Illuminate\Http\Response
     */
    public function edit(TvQuote $tvquote)
    {
        return view('tvquotes.edit',compact('tvquote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TvQuote  $tvquote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TvQuote $tvquote)
    {
        $request->validate([
            'tv_series' => 'required',
            'season' => 'required|integer',
            'episode' => 'required',
            'quote' => 'required'
        ]);

        $tvquote->update($request->all());

        return redirect()->route('tvquotes.index')
                        ->with('success','TV Quote updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TvQuote  $tvquote
     * @return \Illuminate\Http\Response
     */
    public function destroy(TvQuote $tvquote)
    {
        $tvquote->delete();

        return redirect()->route('tvquotes.index')
                        ->with('success','TV Quote deleted');
    }
}