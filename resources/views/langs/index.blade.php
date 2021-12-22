@extends('langs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2>add new lang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('langs.create') }}"> Add New </a>
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
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($langs as $lang)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $lang->name }}</td>
                <td>
                    <form action="{{ route('langs.destroy',$lang->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('langs.edit',$lang->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a class="btn btn-success" href="{{ route('langs.create') }}"> add New</a>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div>
        {!! $langs->links('pagination::bootstrap-4') !!}
    </div>
@endsection
