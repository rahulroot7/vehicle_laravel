<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Services\VehicleService;
use DB;

class VehicleController extends Controller
{
	public $vehicleService;
    function __construct()
    {
        $this->vehicleService = new VehicleService;
    }

	/**
     * index
     * show all record and create
     * @return void
     */
    public function index()
    {
        $vehicles = Vehicle::get();
        return view('vehicle.index', compact('vehicles'));
    }
    /**
     *  @create Show form
     *
     * @return void
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * @store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->vehicleService->vehicleCreateUpdate($request);
        return redirect()->route('vehicle.index')->with('success', 'Vehicle Created Successfull');
    }

    /**
     * @edit
     *
     * @param  mixed $id
     * @return void
     */
    function edit(vehicle $vehicle)
    {
        $vehicleEdit = Vehicle::where('id', $vehicle->id)->first();
        return view('vehicle.edit', compact('vehicle', 'vehicleEdit'));
    }

    /**
     * @update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(Request $request, $vehicle)
    {
        $this->vehicleService->vehicleCreateUpdate($request, $vehicle);
        return redirect()->route('vehicle.index')->with('success', 'Vehicle Upadte Successfull');
    }

    public function updateStatus(Request $request)
    {
        $user = Vehicle::find($request->id);
        if ($user) {
            $user->status = $request->status;
            if ($user->save()) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }
    }


    /**
     * @view
     *
     * @param  mixed $id
     * @return void
     */
    function view(vehicle $vehicle)
    {
        return view('vehicle.view', compact('vehicle'));
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($vehicle)
    {
        try {
            DB::beginTransaction();
            Vehicle::where('id', $vehicle)->Delete();
            DB::commit();
            return redirect()->back()->with('success', 'Vehicle Deleted successfull');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('unsuccess', 'Opps Something wrong!');
        }
    }
}
