<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * List all shipments
     */
    public function index() {
        $shipments = Shipment::with(['status', 'shippingLine'])->get();
        return response()->json($shipments);
    }

    /**
     * Store shipments
     */
    public function store(Request $request) {
        $shipment = Shipment::create($request->all());
        return response()->json($shipment);
    }

    /**
     * Update shipments
     */
    public function update(Request $request, $id) {
        $shipment = Shipment::findOrFail($id);
        $shipment->update($request->all());
        return response()->json($shipment);
    }

    /**
     * Delete shipments
     */
    public function destroy($id) {
        Shipment::destroy($id);
        return response()->json(null);
    }
}
