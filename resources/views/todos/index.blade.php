@extends('app')

@section('content')
<div class="container-index">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Activity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </th>

                            @if(! count($todos))
                                <tr>
                                    <td colspan="3">No todo</td>
                                </tr>
                            @endif
                            @foreach($todos as $todo)
                                <tr>
                                    <td>{{ $todo->name }}</td>
                                    <td>{{ $todo->is_done ? 'Done' : 'Not Done' }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('todos/'.$todo->id.'/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('todos/'.$todo->id.'/delete') }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection