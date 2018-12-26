<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="title">Title:</label>
        <div class="col-md-12">
            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control', 'id' => 'title')) !!}
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
        <label class="col-md-3 control-label" for="estimated_completion_date">Estimated Completion Date:</label>
        <div class="col-md-12">
            {!! Form::text('estimated_completion_date', null, array('placeholder' => 'Estimated Completion Date:','class' => 'form-control
            datepicker', 'id' => 'estimated_completion_date', 'readonly' => 'readonly')) !!}
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label class="col-md-3 control-label" for="status">Status:</label>
        <div class="col-md-12">
            {!! Form::select('status', 
            array_combine(['Created', 'In Progress', 'On Hold', 'Completed', 'Closed'], ['Created', 'In Progress', 'On Hold', 'Completed', 'Closed']), 
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