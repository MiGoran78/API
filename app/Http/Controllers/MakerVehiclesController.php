<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Maker;
use App\Vehicle;
use Illuminate\Http\Request;


class MakerVehiclesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
        $maker = Maker::find($id);
        if(!$maker) {
            return response()->json(['message' => 'This maker does not exist', 'code'=>404], 404);
        }

        return response()->json(['data' => $maker->vehicles], 200);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $vehicleId)
	{
        $maker = Maker::find($id);
        if(!$maker) {
            return response()->json(['message' => 'This maker does not exist', 'code'=>404], 404);
        }

        $vehicle = $maker->vehicles->find($vehicleId);
        if(!$vehicle) {
            return response()->json(['message' => 'This vehicles does not exist for this maker', 'code'=>404], 404);
        }

        return response()->json(['data' => $maker->vehicles->find($vehicleId)], 200);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
