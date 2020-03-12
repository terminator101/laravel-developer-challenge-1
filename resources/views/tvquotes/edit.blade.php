@extends('tvquotes.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit quote</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('tvquotes.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        Problems with input
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tvquotes.update',$tvquote->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-12">
            <div class="form-group">
                TV Series: 
                <input type="text" name="tv_series" class="form-control" value="{{ $tvquote->tv_series }}" placeholder="Series Name">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                Season Number
                <input type="text" name="season" class="form-control" value="{{ $tvquote->season }}" placeholder="1">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                Episode Name
                <input type="text" name="episode" class="form-control" value="{{ $tvquote->episode }}" placeholder="Episode name">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                Quote
                <input type="text" name="quote" class="form-control" value="{{ $tvquote->quote }}" placeholder="quote">
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection