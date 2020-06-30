<?php

namespace App\Http\Controllers;

use App\SensorCategory;

use Illuminate\Http\Request;

class SensorCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sensorCategory = new SensorCategory();

        $datas = $sensorCategory->all();

        return view('pages.sensorCategory.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.sensorCategory.create');
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
        $sensorCategory = new SensorCategory;

        $this->validate($request, [
            'name' => 'required|min:2',
            'unit' => 'required' 
        ]);

        $requestedData = [
            'name' => $request->name,
            'unit' => $request->unit,
        ];

        $data = $sensorCategory->create($requestedData);

        return redirect()->route('sensorCategory.index');
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
        $sensorCategory = new SensorCategory();

        $categoryData = $sensorCategory->where('id', $id)->first();

        return view('pages.sensorCategory.edit')->with('sensorCategory', $categoryData);
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
        $sensorCategory = new SensorCategory;

        $this->validate($request, [
            'name' => 'required|min:2',
            'unit' => 'required' 
        ]);

        $requestedData = [
            'name' => $request->name,
            'unit' => $request->unit,
        ];

        $data = $sensorCategory->where('id', $id)->update($requestedData);

        return redirect()->route('sensorCategory.index');
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
        $sensorCategory = new SensorCategory();

        $delete = $sensorCategory->find($id)->delete();

        return redirect()->route('sensorCategory.index');
    }
}
