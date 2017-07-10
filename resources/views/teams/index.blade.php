@extends('layouts.app')

@section('content')

<div class="row">
	<div col-md-6 col-md-offset-3>
		<ul class="list-group">
		@foreach($teams as $team)
            <li class="list-group-item" style="margin-top: 20px">
            	<span> {{ $team->team }}
            	</span>
            	<span class="pull-right clearfix">
            		Joined ({{$team->manager}})
            		<button class="btn btn-xs btn-primary"> Follow </button>
            	</span>
            </li>
		@endforeach
		
		</ul>
	</div>
</div>

@endsection