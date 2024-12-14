<?php

namespace App\Http\Controllers;

use App\Models\UserSurvey;
use Illuminate\Http\Request;

class UserSurveyController extends Controller
{
    public function view()
    {
        return view('usersurvey');
    }

    public function store(Request $request)
    {
        $responses = [
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'phone' => $request->phone,
            'jumlah_lulusan' => $request->jumlah_lulusan,
            'ipk_minimal' => $request->ipk_minimal,
            'institution_name' => $request->institution_name,
            'institution_address' => $request->institution_address,
            'institution_province' => $request->institution_province,
            'institution_city' => $request->institution_city,
            'institution_email' => $request->institution_email,
            'institution_phone' => $request->institution_phone,
            'institution_business_field' => $request->institution_business_field,
            'kepatuhan' => $request->kepatuhan,
            'sikap' => $request->sikap,
            'emosional' => $request->emosional,
        ];

        UserSurvey::create($responses);

        return redirect()->route('usersurvey')->with('success', 'Data berhasil disimpan');
    }
}