@extends('master')

@section('content')
<div class="home">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <a class="btn-action" href="{{ route('recipes', [], false) }}">
                <i class="fa fa-fw fa-list"></i> My Recipes
            </a>
        </div>
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <a class="btn-action" href="{{ route('search', [], false) }}">
                <i class="fa fa-fw fa-search"></i> Find Recipes
            </a>
        </div>
    </div>
</div>
@stop
