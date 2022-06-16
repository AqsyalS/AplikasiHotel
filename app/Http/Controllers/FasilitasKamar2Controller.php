<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar2;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFasilitasKamar2Request;
use App\Http\Requests\UpdateFasilitasKamar2Request;

class FasilitasKamar2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('EditFasilitasKamar', [
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
        return view ('TambahFasilitasKamar2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFasilitasKamar2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFasilitasKamar2Request $request)
    {
        FasilitasKamar2::create([
            'Fasilitas_Kamar2' => $request->Fasilitas_Kamar2
        ]);

        return redirect('/editfasilitaskamar'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasKamar2  $fasilitasKamar2
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasKamar2 $fasilitasKamar2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasKamar2  $fasilitasKamar2
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasKamar2 $fasilitasKamar2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFasilitasKamar2Request  $request
     * @param  \App\Models\FasilitasKamar2  $fasilitasKamar2
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFasilitasKamar2Request $request, FasilitasKamar2 $fasilitasKamar2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasKamar2  $fasilitasKamar2
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasKamar2 $fasilitasKamar2)
    {
        FasilitasKamar2::destroy($fasilitasKamar2->id);
        return back(); 
    }
}
