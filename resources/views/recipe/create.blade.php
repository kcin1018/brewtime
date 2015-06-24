@extends('master')

@section('content')
@if(count($errors))
<div class="alert alert-danger">
    Please enter in all information to create a recipe
</div>
@endif
<form method="POST" action="{{ route('recipies.store', [], false) }}">
    {!! csrf_field() !!}

    <div class="form-group">
        <label>Brewery</label>
        <input class="form-control" type="text" name="brewery_id" value="{{ old('brewery') }}">
    </div>

    <div class="form-group">
        <label>Style</label>
        <input class="form-control" type="text" name="style_id" value="{{ old('style_id') }}">
    </div>

    <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label>Type</label>
        <input class="form-control" type="text" name="type" value="{{ old('type') }}">
    </div>

    <div class="form-group">
        <label>Yield</label>
        <div class="radios">
            <input id="halfg" type="radio" name="yield" value="2.5 G"> <label for="halfg">2.5 G</label> &nbsp; &nbsp;
            <input id="fullg" type="radio" name="yield" value="5.0 G"> <label for="fullg">5.0 G</label>
        </div>
    </div>

    <div class="form-group">
        <label>Original G</label><br/>
        <input class="original-g-slider" type="text" name="original_g" value="{{ old('original_g') }}">
    </div>

    <div class="form-group">
        <label>Final G</label>
        <input class="final-g-slider" type="text" name="final_g" value="{{ old('final_g') }}">
    </div>

    <div class="form-group">
        <label>Alchohol</label>
        <input class="alcohol-slider" type="text" name="alcohol" value="{{ old('alcohol') }}">
    </div>

    <div class="form-group">
        <label>Bitterness</label>
        <input class="bitterness-slider" type="text" name="bitterness" value="{{ old('bitterness') }}">
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Create</button>
        <a href="{{ route('recipes', [], false) }}" class="btn btn-default btn-block">Cancel</a>
    </div>

</form>
@stop

@section('page-styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/4.9.0/css/bootstrap-slider.min.css" rel="stylesheet">
@stop

@section('page-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/4.9.0/bootstrap-slider.min.js"></script>
<script>
    $('.original-g-slider').slider({
        min: 0.998,
        max: 1.130,
        step: 0.001,
        value: 1.070
    });
    $('.final-g-slider').slider({
        min: 0.998,
        max: 1.130,
        step: 0.001,
        value: 1.015
    });
    $('.alcohol-slider').slider({
        min: 2.0,
        max: 12.0,
        step: 0.1,
        value: 5.0
    });
    $('.bitterness-slider').slider({
        min: 0,
        max: 120,
        step: 1,
        value: 30
    });
</script>
@stop
