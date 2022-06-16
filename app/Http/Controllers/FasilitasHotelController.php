<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFasilitasHotelRequest;
use App\Http\Requests\UpdateFasilitasHotelRequest;

class FasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('EditFasilitasHotel', [
            'fasilitashotel' => Fasilitashotel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TambahFasilitasHotel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFasilitasHotelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFasilitasHotelRequest $request)
    {
        // dd($requst->all());
        // FasilitasHotel::create([
        //     'Fasilitas_Hotel' => $request->Fasilitas_Hotel,
        //     'Gambar' => $request->Gambar
        // ]);



        $nm = $request->Gambar;
        $namafile = $nm->getClientOriginName();

        $dtUpload->nama = $request->nama;
        $dtUpload->Gambar = $namafile;

        $nm->move(public_path().'/img',$namafile);
        $dtUpload->save();

        return redirect('/editfasilitashotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasHotel $fasilitasHotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasHotel $fasilitasHotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFasilitasHotelRequest  $request
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFasilitasHotelRequest $request, FasilitasHotel $fasilitasHotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasHotel $fasilitasHotel)
    {
        FasilitasHotel::destroy($fasilitasHotel->id);
        return back(); 
    }
}
