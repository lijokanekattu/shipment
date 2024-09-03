<?php

namespace App\Http\Controllers;

use App\Models\ShippingLine;
use Illuminate\Http\Request;

class ShippingLineController extends Controller
{

    /**
     * List all shipment lines
     */
    public function index() {
        $shippingLines = ShippingLine::all();
        return response()->json($shippingLines);
    }

    /**
     * Save shipment line
     */
    public function store(Request $request) {
        $shippingLine = ShippingLine::create($request->all());
        return response()->json($shippingLine);
    }

    /**
     * Update shipment line
     */
    public function update(Request $request, $id) {
        $shippingLine = ShippingLine::findOrFail($id);
        $shippingLine->update($request->all());
        return response()->json($shippingLine);
    }

}
