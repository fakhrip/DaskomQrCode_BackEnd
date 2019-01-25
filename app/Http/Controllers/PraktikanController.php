<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Praktikan;
use App\Http\Resources\Praktikan as PraktikanResource;

class PraktikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_praktikan = Praktikan::all();
        return PraktikanResource::collection($all_praktikan);
    }

    public function store($nim)
    {
        $praktikan = Praktikan::where('nim', $nim)->firstOrFail();

        $praktikan->status = 1;

        if($praktikan->save()){

            return "Data saved successfully";
        } else {

            return "Something went wrong";
        }
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
}
