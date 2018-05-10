@extends('layouts.website')

@section('title', 'Check Certificate Status')

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
        

@stop

@section('scripts')

@stop