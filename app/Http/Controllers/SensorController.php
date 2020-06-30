<?php

namespace App\Http\Controllers;

use App\Sensor;
use App\SensorCategory;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sensor = new Sensor();

        $datas = $sensor->all();

        return view('pages.sensor.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['categories'] = SensorCategory::get();
        return view('pages.sensor.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $sensor = new Sensor;

        $this->validate($request, [
            'name' => 'required|min:2',
            'description'  => 'required|min:2',
        ]);

        $requestedData = [
            'name' => $request->name,
            'description' => $request->description,
            'qty' => $request->qty,
            'category_id' => $request->category,
        ];

        $data = $sensor->create($requestedData);

        return redirect()->route('sensor.index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $data['sensor'] = Sensor::find($id);
        $data['categories'] = SensorCategory::get();
        return view('pages.sensor.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $sensor = new Sensor;

        $this->validate($request, [
            'name' => 'required|min:2',
            'description'  => 'required|min:2',
        ]);

        $requestedData = [
            'name' => $request->name,
            'description' => $request->description,
            'qty' => $request->qty,
            'category_id' => $request->category,
        ];

        $data = $sensor->where('id', $id)->update($requestedData);
        
        return redirect()->route('sensor.index');
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
        $sensor = new Sensor();

        $delete = $sensor->find($id)->delete();

        return redirect()->route('sensor.index');
    }
}
