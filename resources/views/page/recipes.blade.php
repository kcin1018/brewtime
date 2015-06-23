@extends('master')

@section('back-btn')
<a href="{{ route('home', [], false) }}"><i class="fa fa-fw fa-arrow-left"></i></a>
@stop

@section('content')
<div id="recipies" class="list-group">
</div>
@stop

@section('page-scripts')
<script>
    var RecipeRow = React.createClass({
        render: function() {
            return('<tr>' + this.props.recipe.name + '</tr>');
        }
    });

    var RecipeTable = React.createClass({
        render() {

        }
    });

    React.render(React.createElement('h1', null, 'Hello, world!'), document.getElementById('recipies'));
</script>
@stop