<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\FasilitasKamar2;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFasilitasKamarRequest;
use App\Http\Requests\UpdateFasilitasKamarRequest;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('EditFasilitasKamar', [
            'fasilitaskamar' => FasilitasKamar::all(),
            'fasilitaskamar2' => FasilitasKamar2::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('TambahFasilitasKamar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFasilitasKamarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FasilitasKamar::create([
            'Fasilitas_Kamar' => $request->Fasilitas_Kamar
        ]);

        return redirect('/editfasilitaskamar'); 

    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasKamar $fasilitasKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasKamar $fasilitasKamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFasilitasKamarRequest  $request
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFasilitasKamarRequest $request, FasilitasKamar $fasilitasKamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasKamar $fasilitasKamar)
    {
        FasilitasKamar::destroy($fasilitasKamar->id);
        return back(); 
    }
}
