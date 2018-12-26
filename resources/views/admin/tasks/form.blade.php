<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="title">Name:</label>
        <div class="col-md-12">
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'id' => 'name')) !!}
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="description">Description:</label>
        <div class="col-md-12">
            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control', 'id' => 'description',
            'rows' => 5)) !!}
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="start_date">Start Date:</label>
        <div class="col-md-12">
            {!! Form::text('start_date', null, array('placeholder' => 'Start Date','class' => 'form-control datepicker', 'id' => 'start_date',
            'readonly' => 'readonly')) !!}
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="end_date">End Date:</label>
        <div class="col-md-12">
            {!! Form::text('end_date', null, array('placeholder' => 'End Date','class' => 'form-control datepicker', 'id' => 'end_date',
            'readonly' => 'readonly')) !!}
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="project_id">Project:</label>
        <div class="col-md-12">
            {!! Form::select('project_id', 
            $projects, 
            null, array('class' => 'form-control',
            'id' => 'project_id')) !!}
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="assignees">Assign To:</label>
        <div class="col-md-12">
            {!! Form::select('assignees[]', 
            $assignees, 
            null, array('class' => 'form-control',
            'id' => 'assignees', 'multiple' => 'multiple')) !!}
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="status">Status:</label>
        <div class="col-md-12">
            {!! Form::select('status', 
            array_combine(['Created', 'Started', 'Completed', 'Closed'], ['Created', 'Started', 'Completed', 'Closed']), 
            null, array('class' => 'form-control',
            'id' => 'status')) !!}
        </div>
    </div>
</div>

<hr>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

@section('after-script')
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.datepicker').datepicker({
            startDate: new Date,
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
@endsection