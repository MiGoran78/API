<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vehicle;
use Illuminate\Http\Request;


class VehicleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $vehicle = Vehicle::all();
        return response()->json(['data' => $vehicle], 200);
	}

}
