<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class MakeBuyerController extends Controller
{

    public function entry(User $user)
    {
        $user->email        =   Input::get('email');
        $user->mobile       =   Input::get('mobile');
        $user->name         =   Input::get('name');
        $user->save();
        $buyer             =   Buyer::firstOrNew(['id'=>$user->id]);
        $buyer->org_id     =   Auth::user()->id;
        return $user;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyers=Buyer::all();
        var_dump($buyers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.buyer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuyer $request)
    {
        $user               =   new User();
        $user->role_id      =   3;
        $user->password     =   str_random(8); 
        $user=entry($user);

        //Mail HERE
        Mail::to(Input::get('email'))->queue(new WelcomeBuyer(Input::get('name'),$user->password));

        return redirect()->route('buyer.show', ['buyer' => $user->id])->with('status', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        return view('pages.buyer.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        return view('pages.buyer.create')->with(['buyer'=>$buyer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBuyer $request, Buyer $buyer)
    {
        $user=$buyer->user();
        $user=entry($user);
        return redirect()->route('buyer.show', ['buyer' => $user->id])->with('status', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        $buyer->delete();
        return redirect()->route('buyer.index')->with('status', 'Successfully Deleted');buyer
    }
}
