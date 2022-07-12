<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTabRequest;
use App\Http\Requests\UpdateTabRequest;
use App\Models\Tab;

class TabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTabRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTabRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tab  $tab
     * @return \Illuminate\Http\Response
     */
    public function show(Tab $tab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tab  $tab
     * @return \Illuminate\Http\Response
     */
    public function edit(Tab $tab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTabRequest  $request
     * @param  \App\Models\Tab  $tab
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTabRequest $request, Tab $tab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tab  $tab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tab $tab)
    {
        //
    }
}
