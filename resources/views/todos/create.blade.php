@extends('app')

@section('content')
    <div class="form-create">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/todos') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label">Activity</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Todo</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection