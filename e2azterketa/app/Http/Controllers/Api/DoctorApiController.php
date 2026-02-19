<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorApiController extends Controller
{

    /*{
    "id": 1,
    "izena": "Gabriel",
    "espezialitatea": "Pancreas",
    "created_at": "2026-02-05T07:27:13.000000Z",
    "updated_at": "2026-02-05T07:27:13.000000Z"
    }*/
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return response()->json($doctor);
    }

    /*{
    "izena": "Gabriel",
    "espezialitatea": "traumatologia",
    "updated_at": "2026-02-05T08:01:08.000000Z",
    "created_at": "2026-02-05T08:01:08.000000Z",
    "id": 4
    }*/
    public function store(Request $request)
    {
        $validated = $request->validate([
            'izena' => 'required|string|max:255',
            'espezialitatea' => 'required|in:familia,traumatologia,oftalmologia,neurologia',
        ]);

        $doctor = Doctor::create($validated);

        return response()->json($doctor, 201);
    }
}
