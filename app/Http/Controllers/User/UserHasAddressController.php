<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserHasAddress;
use App\Http\Requests\StoreUserHasAddressRequest;
use App\Http\Requests\UpdateUserHasAddressRequest;

class UserHasAddressController extends Controller
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
     * @param  \App\Http\Requests\StoreUserHasAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserHasAddressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserHasAddress  $userHasAddress
     * @return \Illuminate\Http\Response
     */
    public function show(UserHasAddress $userHasAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserHasAddress  $userHasAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(UserHasAddress $userHasAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserHasAddressRequest  $request
     * @param  \App\Models\UserHasAddress  $userHasAddress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserHasAddressRequest $request, UserHasAddress $userHasAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserHasAddress  $userHasAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserHasAddress $userHasAddress)
    {
        //
    }
}
