@extends('tvquotes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Favourite TV Quotes</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('tvquotes.create') }}" class="btn btn-success">Add TV Quote</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>TV Series</th>
            <th>Season</th>
            <th>Episode</th>
            <th>Quote</th>
        </tr>
        @foreach ($tvquotes as $tvquote)
        <tr>
            <td>{{ $tvquote->tv_series }}</td>
            <td>{{ $tvquote->season }}</td>
            <td>{{ $tvquote->episode }}</td>
            <td>{{ $tvquote->quote }}</td>
            <td>
                <form action="{{ route('tvquotes.destroy', $tvquote->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('tvquotes.show',$tvquote->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('tvquotes.edit',$tvquote->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection