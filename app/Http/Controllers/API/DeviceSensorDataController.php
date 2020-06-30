<?php

namespace App\Http\Controllers\API;

use App\DeviceSensorData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeviceSensorDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = new DeviceSensorData();

        $datas = $data->all();

        return view('pages.data.index')->with('datas', $datas);
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
        $data = new DeviceSensorData();

        $this->validate($request, [
            'device_sensor_id' => 'required',
            'result'  => 'required',
        ]);

        $requestedData = [
            'device_sensor_id' => $request->device_sensor,
            'result' => $request->result,
        ];

        $data = $data->create($requestedData);

        return redirect()->route('pages.data.index');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = new DeviceSensorData();

        $this->validate($request, [
            'device_sensor_id' => 'required',
            'result'  => 'required',
        ]);

        $requestedData = [
            'device_sensor_id' => $request->device_sensor,
            'result' => $request->result,
        ];

        $data = $data->where('id', $id)->update($requestedData);
        return redirect()->route('pages.data.index');
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
        $data = new DeviceSensorData();

        $delete = $data->find($id)->delete();

        return redirect()->route('pages.data.index');
    }
}
