@extends('logos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin-panel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('logos.create') }}"> Create New </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($logos as $logo)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/image/{{ $logo->image }}" width="100px"></td>
                <td>{{ $logo->name }}</td>
                <td>{{ $logo->detail }}</td>
                <td>
                    <form action="{{ route('logos.destroy',$logo->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('logos.show',$logo->id) }}">Show</a>


                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a class="btn btn-success" href="{{ route('logos.create') }}">add New</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div>
        {!! $logos->links('pagination::bootstrap-4') !!}
    </div>


@endsection
