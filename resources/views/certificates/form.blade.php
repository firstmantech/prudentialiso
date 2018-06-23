    <div class="form-group{{ $errors->has('certificate_no') ? ' has-error' : '' }}">
        <label for="certificate_no" class="col-md-4 control-label">Certificate Number</label>

        <div class="col-md-6">
            {!! Form::text('certificate_no', null, array('class' => 'form-control', 'id' => 'certificate_no')) !!}
            @if ($errors->has('certificate_no'))
                <span class="help-block">
                    <strong>{{ $errors->first('certificate_no') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
        <label for="company_name" class="col-md-4 control-label">Company Name</label>

        <div class="col-md-6">
            {!! Form::text('company_name', null, array('class' => 'form-control', 'id' => 'company_name', 'required' => '')) !!}
            @if ($errors->has('company_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('company_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('address_line_one') ? ' has-error' : '' }}">
        <label for="address_line_one" class="col-md-4 control-label">Address Line One</label>

        <div class="col-md-6">
            {!! Form::text('address_line_one', null, array('class' => 'form-control', 'id' => 'address_line_one', 'required' => '')) !!}
            @if ($errors->has('address_line_one'))
                <span class="help-block">
                    <strong>{{ $errors->first('address_line_one') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('address_line_two') ? ' has-error' : '' }}">
        <label for="address_line_two" class="col-md-4 control-label">Address Line Two</label>

        <div class="col-md-6">
            {!! Form::text('address_line_two', null, array('class' => 'form-control', 'id' => 'address_line_two')) !!}
            @if ($errors->has('address_line_two'))
                <span class="help-block">
                    <strong>{{ $errors->first('address_line_two') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('address_line_three') ? ' has-error' : '' }}">
        <label for="address_line_three" class="col-md-4 control-label">Address Line Three</label>

        <div class="col-md-6">
            {!! Form::text('address_line_three', null, array('class' => 'form-control', 'id' => 'address_line_three')) !!}
            @if ($errors->has('address_line_three'))
                <span class="help-block">
                    <strong>{{ $errors->first('address_line_three') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('address_two') ? ' has-error' : '' }}">
        <label for="address_two" class="col-md-4 control-label">Address Two</label>

        <div class="col-md-6">
            {!! Form::textarea('address_two', null, array('class' => 'form-control', 'id' => 'address_two', 'rows' => 3)) !!}
            @if ($errors->has('address_two'))
                <span class="help-block">
                    <strong>{{ $errors->first('address_two') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('scope_line_one') ? ' has-error' : '' }}">
        <label for="scope_line_one" class="col-md-4 control-label">Scope One</label>

        <div class="col-md-6">
            {!! Form::text('scope_line_one', null, array('class' => 'form-control', 'id' => 'scope_line_one', 'required')) !!}
            @if ($errors->has('scope_line_one'))
                <span class="help-block">
                    <strong>{{ $errors->first('scope_line_one') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('scope_line_two') ? ' has-error' : '' }}">
        <label for="scope_line_two" class="col-md-4 control-label">Scope Two</label>

        <div class="col-md-6">
            {!! Form::text('scope_line_two', null, array('class' => 'form-control', 'id' => 'scope_line_two')) !!}
            @if ($errors->has('scope_line_two'))
                <span class="help-block">
                    <strong>{{ $errors->first('scope_line_two') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('scope_line_three') ? ' has-error' : '' }}">
        <label for="scope_line_three" class="col-md-4 control-label">Scope Three</label>

        <div class="col-md-6">
            {!! Form::text('scope_line_three', null, array('class' => 'form-control', 'id' => 'scope_line_three')) !!}
            @if ($errors->has('scope_line_three'))
                <span class="help-block">
                    <strong>{{ $errors->first('scope_line_three') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('standard') ? ' has-error' : '' }}">
        <label for="standard" class="col-md-4 control-label">Standard</label>

        <div class="col-md-6">
            {!! Form::select('standard', array('' => '--Select--', '9001:2015' => '9001:2015', '22000:2005' => '22000:2005', 'HACCP' => 'HACCP', 'GMP' => 'GMP', '14001:2015' => '14001:2015', 'ROHS' => 'ROHS', 'Green' => 'Green', '27000:2013' => '27000:2013', '13485:2016' => '13485:2016'), null,  array('class' => 'form-control', 'id' => 'standard')) !!}
            @if ($errors->has('standard'))
                <span class="help-block">
                    <strong>{{ $errors->first('standard') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('issue_date') ? ' has-error' : '' }}">
        <label for="issue_date" class="col-md-4 control-label">Issue Date</label>

        <div class="col-md-6">
            {!! Form::date('issue_date', null, array('class' => 'form-control', 'id' => 'issue_date')) !!}
            @if ($errors->has('issue_date'))
                <span class="help-block">
                    <strong>{{ $errors->first('issue_date') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('first_surv') ? ' has-error' : '' }}">
        <label for="first_surv" class="col-md-4 control-label">First Surv</label>

        <div class="col-md-6">
            {!! Form::date('first_surv', null, array('class' => 'form-control', 'id' => 'first_surv')) !!}
            @if ($errors->has('first_surv'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_surv') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('second_surv') ? ' has-error' : '' }}">
        <label for="second_surv" class="col-md-4 control-label">Second Surv</label>

        <div class="col-md-6">
            {!! Form::date('second_surv', null, array('class' => 'form-control', 'id' => 'second_surv')) !!}
            @if ($errors->has('second_surv'))
                <span class="help-block">
                    <strong>{{ $errors->first('second_surv') }}</strong>
                </span>
            @endif
        </div>
    </div>                            

    <div class="form-group{{ $errors->has('expiry_date') ? ' has-error' : '' }}">
        <label for="expiry_date" class="col-md-4 control-label">Expiry Date</label>

        <div class="col-md-6">
            {!! Form::date('expiry_date', null, array('class' => 'form-control', 'id' => 'expiry_date')) !!}
            @if ($errors->has('expiry_date'))
                <span class="help-block">
                    <strong>{{ $errors->first('expiry_date') }}</strong>
                </span>
            @endif
        </div>
    </div> 

    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
        <label for="status" class="col-md-4 control-label">Status</label>

        <div class="col-md-6">
            {!! Form::select('status', array('' => '--Select--', 'Active' => 'Active', 'Suspended' => 'Suspended', 'Cancelled' => 'Cancelled'), null,  array('class' => 'form-control', 'id' => 'status')) !!}
            @if ($errors->has('status'))
                <span class="help-block">
                    <strong>{{ $errors->first('status') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>
