@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Enter New Certificate</div>

                <div class="panel-body">
                    {!! Form::open(array('route' => 'certificates.store', 'class' => 'form-horizontal', 'method'=>'POST', 'files' => true)) !!}
                         
                      @include('certificates.form')

                    {!! Form::close() !!}                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
