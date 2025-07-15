<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $monitor->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('name', 'Nome:') !!}
    <p>{!! $monitor->name !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $monitor->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $monitor->updated_at !!}</p>
</div>

