<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * List all Status
     */
    public function index() {
        $statuses = Status::all();
        return response()->json($statuses);
    }

    /**
     * Save Status
     */
    public function store(Request $request) {
        $status = Status::create($request->all());
        return response()->json($status);
    }

    /**
     * Update Status
     */
    public function update(Request $request, $id) {
        $status = Status::findOrFail($id);
        $status->update($request->all());
        return response()->json($status);
    }
}
