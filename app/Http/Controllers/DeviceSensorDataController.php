<?php

namespace App\Http\Controllers;

use App\DeviceSensorData;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DeviceSensorDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deviceSensorData = DB::table('device_sensor_datas')->get();
        $response = [
            'message' => 'List device sensor data',
            'data' => $deviceSensorData
        ];

        return response() -> json($response, Response::HTTP_OK);
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
        $deviceSensorData = new DeviceSensorData;

        $this->validate($request, [
            'device_sensor_id' => 'required',
            'result' => 'required' 
        ]);

        $requestedData = [
            'device_sensor_id' => $request->device_sensor_id,
            'result' => $request->result 
        ];

        DB::table('device_sensor_datas')->insert($requestedData);

        $response = [
            'message' => 'Tambah device sensor data',
        ];
        return response() -> json($response, Response::HTTP_OK);
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
        DB::table('device_sensor_datas')->where('id', $id)->delete();
        
        $response = [
            'message' => 'Berhasil hapus device sensor data',
        ];

        return response() -> json($response, Response::HTTP_OK);
    }
}
