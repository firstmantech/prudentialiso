@extends('layouts.website')

@section('title', 'Certificate Search Results')

@section('styles')

@stop

@section('content')

        
        <!--================Tracking Button Area =================-->
        <section class="tracking_search_area">
            <div class="container">
                <div class="tracking_search_inner">
                    <h2 class="single_title">Check Your Certificate Status</h2>
                    <h5>Enter a Certificate number, and get status results.</h5>
                    <form name="subscribe_form" action="{{ route('search') }}" method="POST">
							 {{ csrf_field() }}
                    <div class="input-group">
                      <input type="text" name="certificate" class="form-control" placeholder="Certificate Number">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Get Status</button>
                      </span>
                    </div><!-- /input-group -->
                  </form>
                </div>
            </div>
        </section>
        <!--================End Tracking Button Area =================-->
        
        <!--================Tracking Timeline Area =================-->

        
        <section class="timeline_tracking_area">
            
            <div class="container">
            
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                @forelse ($certificates as $certificate)
                    
                    <table class="table table-bordered table-responsive" style="white-space:nowrap;">
                        <thead>
                            <tr>
                                <td>Certificate Number</td>
                                <td>{{ $certificate->certificate_no }}</td>
                            </tr>
                            <tr>
                                <td>Company Name :</td>
                                <td>{{ $certificate->company_name }}</td>
                            </tr>
                            @if(is_null($certificate->address_two))
                            <tr>
                                <td>Address</td>
                                <td>{{ $certificate->address }}</td>
                            </tr>
                            @else
                            <tr>
                                <td>Address One</td>
                                <td>{{ $certificate->address }}</td>
                            </tr>
                            <tr>
                                <td>Address Two</td>
                                <td>{{ $certificate->address_two }}</td>
                            </tr>
                            @endif
                            <tr>
                                <td>Scope Of Business</td>
                                <td>{{ $certificate->scope }}</td>
                            </tr>
                            <tr>
                                <td>Standard</td>
                                <td>{{ $certificate->standard }}</td>
                            </tr>
                            <tr>
                                <td>Certificate Issues Date</td>
                                <td>{{ date('d-m-Y', strtotime($certificate->issue_date)) }}</td>
                            </tr>
                            <tr>
                                <td>1st Survielliance Date</td>
                                <td>{{ date('d-m-Y', strtotime($certificate->first_surv)) }}</td>
                            </tr>
                            <tr>
                                <td>2nd Survielliance Date</td>
                                <td>{{ date('d-m-Y', strtotime($certificate->second_surv)) }}</td>
                            </tr>
                            <tr>
                                <td>Valid Till</td>
                                <td>{{ date('d-m-Y', strtotime($certificate->expiry_date)) }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{ $certificate->status }}</td>
                            </tr>               
                        </thead>
                    </table>
                @empty
                    <h1>Certificates not found!</h1>
                @endforelse                   
                    </div>
                </div>
            </div>
        </section>

        <!--================End Tracking Timeline Area =================-->

@stop

@section('scripts')

@stop