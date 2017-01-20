<?php

namespace App\Http\Controllers;
use App\Flyer;
use App\Photo;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Http\Request;
use App\Http\Requests\FlyerRequest;


class FlyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        flash()->success('Success!', 'Your flyer has been created.');
//        flash()->overlay('Welcome', 'Thank you for signing up.');

        return view('flyers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlyerRequest $request)
    {
        Flyer::create($request->all());
//        session()->flash('flash_message', 'Flyer created successfully');
        //flash('Success!', 'Your flyer has been created.'); //this flash() is called through helpers.php which will call flash.php. (audoload file)
        flash()->success('Success!', 'Your flyer has been created.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($zip, $street)
    {
        $flyers = Flyer::LocatedAt($zip, $street)->first();

        return view('flyers.show', compact('flyers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FlyerRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
