@extends('layouts.app')

@section('content')

<div class="row">
	<div col-md-6 col-md-offset-3>
		<ul class="list-group">
		@foreach($users as $usr)
            <li class="list-group-item" style="margin-top: 20px">
            	<span> {{ $usr->username }}
            	</span>
            	<span class="pull-right clearfix">
            		Joined ({{$usr->created_at}})
            		<button class="btn btn-xs btn-primary"> Follow </button>
            	</span>
            </li>
		@endforeach
		{{ $users->links() }}
		</ul>
	</div>
</div>

@endsection