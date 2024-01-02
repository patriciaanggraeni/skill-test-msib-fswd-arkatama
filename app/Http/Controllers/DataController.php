<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function index()
    {
        $data = Data::all();
        return view('show')->with('show_data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['input_data' => 'required|string',]);
        $input_data = explode(' ', strtoupper($request->input('input_data')));
        $age = 0;

        foreach ($input_data as $input_word) {
            if (is_numeric($input_word)) {
                $age = (int)$input_word;
                break;
            } elseif (in_array(strtoupper($input_word), ['TAHUN', 'THN', 'TH'])) {
                $age = (int)next($input_data);
                break;
            }
        }

        // Menyimpan data ke database
        $data = new Data([
            'name' => implode(' ', $input_data),
            'age' => $age,
            'city' => end($input_data),
        ]);

        $data->save();
        return redirect('/show_data')->with('data', $data);
    }

    /**
     * Display the specified resource.`
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $data)
    {
        //
    }
}
