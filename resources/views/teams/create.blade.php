@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <form action="/teams" method="POST" >

<select class="form-control m-bot15" name="department_id">
           @if($department->count() > 0)
          @foreach($department as $dept)
           <option value="{{$dept->id}}">{{$dept->department_id}}</option>
          @endForeach
          @else
           No Record Found
            @endif   
        </select>

                    <div class="form-group">
                         <input id="team" type="text" class="form-control" name="team" value="{{ old('team') }}" required autofocus>
                      <div class="form-group{{ $errors->has('team') ? ' has-error' : '' }}">
                            <label for="team" class="col-md-4 control-label">Team</label>

                            <div class="col-md-6">
                                <textarea id="team" class="form-control" name="team" value="{{ old('team') }}"  autofocus>

                                @if ($errors->has('team'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                  
                    <input type="submit" class="btn btn-success pull-right">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection