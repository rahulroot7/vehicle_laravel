<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Vehicle;
use Exception;
use Illuminate\Support\Facades\DB;

class VehicleService
{
    /**
     * @userCreateUpdate
     *  manipulateInput
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    function vehicleCreateUpdate($request, $id = null)
    {
        try {
            DB::beginTransaction();
            $user = Vehicle::updateOrCreate(
                [
                    'id'   => $id
                ],
                [
                    'agmt_no' => $request->agmt_no,
                    'app_id' => $request->app_id,
                    'customer_name' => $request->customer_name,
                    'bkt' => $request->bkt,
                    'pos' => $request->pos,
                    'tos' => $request->tos,
                    'reg_number' => $request->reg_number,
                    'chassis_no' => $request->chassis_no,
                    'engine_no' => $request->engine_no,
                    'model' => $request->model,
                    'product' => $request->product,
                    'file_name' => $request->file_name,
                    'branch' => $request->branch,
                    'customer_mobile_no' => $request->customer_mobile_no,
                ]
            );
            DB::commit();
            return '200';
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }
}
