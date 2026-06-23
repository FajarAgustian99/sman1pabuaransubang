<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class StrukturOrganisasiController extends Controller
{
    //
    public function index()
    {
        $organizations = Organization::orderBy('sort_order')->get();

        return view(
            'frontend.struktur-organisasi',
            compact('organizations')
        );
    }
}
