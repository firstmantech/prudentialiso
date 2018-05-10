@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    {!! Form::model($certificate, ['method' => 'PATCH', 'files' => true, 'class' => 'form-horizontal', 'route' => ['certificates.update', $certificate->id]]) !!}
                         
                      @include('certificates.form')

                    {!! Form::close() !!}                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection