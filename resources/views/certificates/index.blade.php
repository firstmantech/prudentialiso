@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{ url('certificates/create') }}" class="btn btn-info">Enter New Certificate</a>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">All Certificates</div>

                <div class="panel-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table id="datatable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Sl.No</th>
                        <th>Certificate No</th>
                        <th>Company Name</th>
                        <th>Address Line One</th>
                        <th>Address Line Two</th>
                        <th>Address Line Three</th>
                        <th>Address Two</th>
                        <th>Scope One</th>
                        <th>Scope Two</th>
                        <th>Scope Three</th>
                        <th>Standard</th>
                        <th>Issue Date</th> 
                        <th>1st Surv</th>
                        <th>2nd Surv</th>
                        <th>Expiry Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>@foreach($certificates as $certificate)
                    <tr>
                        <td>{{ $certificate->id }}</td>
                        <td>{{ $certificate->certificate_no }}</td>
                        <td>{{ $certificate->company_name }}</td>
                        <td>{{ $certificate->address_line_one }}</td>
                        <td>{{ $certificate->address_line_two }}</td>
                        <td>{{ $certificate->address_line_three }}</td>
                        <td>{{ $certificate->address_two }}</td>
                        <td>{{ $certificate->scope_line_one }}</td>
                        <td>{{ $certificate->scope_line_two }}</td>
                        <td>{{ $certificate->scope_line_three }}</td>
                        <td>{{ $certificate->standard }}</td>
                        <td>{{ $certificate->issue_date }}</td>
                        <td>{{ $certificate->first_surv }}</td>
                        <td>{{ $certificate->second_surv }}</td>
                        <td>{{ $certificate->expiry_date }}</td>
                        <td>{{ $certificate->status }}</td>
                        <td>
                            <a class="btn btn-sm btn-rounded btn-success" href="{{ route('certificates.show',$certificate->id) }}">View</a>
                            <a class="btn btn-sm btn-rounded btn-info" href="{{ route('certificates.edit',$certificate->id) }}">Edit</a>
                            <a class="btn btn-sm btn-rounded btn-info" href="{{ route('generate.certificate') }}">Generate</a>
                            {{Form::open(array( 
                                'route' => array( 'certificates.destroy', $certificate->id ), 
                                'method' => 'delete', 
                                'style' => 'display:inline',
                                'onsubmit' => "return confirm('Are you sure you want to delete?')",
                            ))}}
                                 {{Form::submit('Delete', array('class' => 'btn btn-sm btn-rounded btn-danger'))}}
                            {{Form::close()}}
                        </td>                        
                    </tr>@endforeach
                    </tbody>
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
