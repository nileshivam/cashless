<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class MakeVendorController extends Controller
{
    public function entry(User $user)
    {
        $user->email        =   Input::get('email');
        $user->mobile       =   Input::get('mobile');
        $user->name         =   Input::get('name');
        $user->save();
        $vendor             =   Vendor::firstOrNew(['id'=>$user->id]);
        $vendor->org_id     =   Auth::user()->id;
        return $user;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors=Vendor::all();
        var_dump($vendors);
        //return view('pages.vendor.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('pages.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendor $request)
    {
        $user               =   new User();
        $user->role_id      =   2;
        $user->password     =   str_random(8); 
        $user=entry($user);

        //Mail HERE
        Mail::to(Input::get('email'))->queue(new WelcomeVendor(Input::get('name'),$user->password));

        return redirect()->route('vendor.show', ['vendor' => $user->id])->with('status', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
        return view('pages.vendor.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
        return view('pages.vendor.create')->with(['vendor'=>$vendor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVendor $request, Vendor $vendor)
    {
        $user=$vendor->user();
        $user=entry($user);
        return redirect()->route('vendor.show', ['vendor' => $user->id])->with('status', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
        return redirect()->route('vendor.index')->with('status', 'Successfully Deleted');
    }
}
