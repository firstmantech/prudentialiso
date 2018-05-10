<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;

class SearchController extends Controller
{

	public function certificate()
	{
		return view('search-certificate');
	}

    public function search(Request $request)
    {
        $cert = $request->certificate;

        $comp = $request->certificate;

        
        	$certificates = Certificate::where('certificate_no', '=', $cert)
            ->get();
        

        return view('search-result')->with('certificates', $certificates);
    }

}
