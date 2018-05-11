<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;
use Anam\PhantomMagick\Converter;

class CertificateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::all();

        return view('certificates.index',compact('certificates'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'certificate_no' => 'required',
            'company_name' => 'required',
            'address_line_one' => 'required',
            'scope_line_one' => 'required',
            'standard' => 'required',
            'issue_date' => 'required',
            'first_surv' => 'required',
            'second_surv' => 'required',
            'expiry_date' => 'required',
            'status' => 'required',
        ]);
        
        $certificate = new Certificate;
        $certificate->certificate_no = $request->certificate_no;
        $certificate->company_name = $request->company_name;
        $certificate->address_line_one = $request->address_line_one;
        if ($request->address_line_two) {
            $certificate->address_line_two = $request->address_line_two;
        }
        if ($request->address_line_three) {
            $certificate->address_line_three = $request->address_line_three;
        }
        if ($request->address_two) {
            $certificate->address_two = $request->address_two;
        }
        $certificate->scope_line_one = $request->scope_line_one;
        if ($request->scope_line_two) {
            $certificate->scope_line_two = $request->scope_line_two;
        }
        if ($request->scope_line_three) {
            $certificate->scope_line_three = $request->scope_line_three;
        }
        $certificate->standard = $request->standard;
        $certificate->issue_date = $request->issue_date;
        $certificate->first_surv = $request->first_surv;
        $certificate->second_surv = $request->second_surv;
        $certificate->expiry_date = $request->expiry_date;
        $certificate->status = $request->status;
        $certificate->save();
        
        return redirect('certificates')->with('success', 'Successfully Created the Certificate!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        return view('certificates.show',compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        return view('certificates.edit',compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'certificate_no' => 'required',
            'company_name' => 'required',
            'address_line_one' => 'required',
            'scope_line_one' => 'required',
            'standard' => 'required',
            'issue_date' => 'required',
            'first_surv' => 'required',
            'second_surv' => 'required',
            'expiry_date' => 'required',
            'status' => 'required',
        ]);

        $certificate = Certificate::find($id);
        $certificate->certificate_no = $request->certificate_no;
        $certificate->company_name = $request->company_name;
        $certificate->address_line_one = $request->address_line_one;
        if ($request->address_line_two) {
            $certificate->address_line_two = $request->address_line_two;
        }
        if ($request->address_line_three) {
            $certificate->address_line_three = $request->address_line_three;
        }
        if ($request->address_two) {
            $certificate->address_two = $request->address_two;
        }
        $certificate->scope_line_one = $request->scope_line_one;
        $certificate->scope_line_two = $request->scope_line_two;
        $certificate->scope_line_three = $request->scope_line_three;
               
        $certificate->standard = $request->standard;
        $certificate->issue_date = $request->issue_date;
        $certificate->first_surv = $request->first_surv;
        $certificate->second_surv = $request->second_surv;
        $certificate->expiry_date = $request->expiry_date;
        $certificate->status = $request->status;
        $certificate->save();


        return redirect('/certificates')->with('success', 'Successfully Modified the Certificate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $id = Certificate::find($id);
        $id->delete();

        return redirect('/certificates')->with('success', 'Successfully Deleted the Certificate!');
    }

    public function generateCertificate()
    {
        $certificate_id = Certificate::orderBy('id', 'desc')->first();

        $url = 'http://localhost:8000/mycertificate/'.$certificate_id->id;

        $cert_id = Certificate::find($certificate_id->id);

        $filename = $cert_id->certificate_no.'.jpg';

        $path = public_path();

        Converter::make($url)
        ->toJpg()
        ->width(2480)
        ->height(3508)        
        ->save($path.'/certificates_path/'.$filename);

        $cv_path = public_path().'/certificates_path/'.$filename;

        $certificate = Certificate::find($certificate_id->id);
        $certificate->path = $cv_path;
        $certificate->save();

        return redirect('/certificates')->with('success', 'Certificate Generated Successfully!');
    }
}
