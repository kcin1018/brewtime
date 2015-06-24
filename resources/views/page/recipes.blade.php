@extends('master')

@section('back-btn')
<a href="{{ route('home', [], false) }}"><i class="fa fa-fw fa-arrow-left"></i></a>
@stop

@section('forward-btn')
<a href="{{ route('recipies.create', [], false) }}"><i class="fa fa-fw fa-plus"></i></a>
@stop

@section('content')
<div id="recipies" class="list-group list">
    <input class="form-control search" type="text" placeholder="Filter">
    <hr/>

    @forelse($recipes as $recipe)
    <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading name">{{$recipe->name}}</h4>
        <p class="list-group-item-text text-muted">
            A <strong class="style">{{$recipe->style->display()}}</strong> from <strong class="brewery">{{$recipe->brewery->display()}}</strong>
        </p>
    </a>
    @empty
    <h4 class="text-center">There are no recipies created or saved</h4>
    @endforelse
</div>
@stop

@section('page-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
<script>
var options = {
    valueNames: ['name', 'style', 'brewery']
};

var recipeList = new List('recipes', options);
</script>
@stop