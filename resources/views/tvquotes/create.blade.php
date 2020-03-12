@extends('tvquotes.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add quote</h2>
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

<form action="{{ route('tvquotes.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                TV Series:
                <input type="text" name="tv_series" class="form-control" placeholder="Series Name">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                Season Number
                <input type="text" name="season" class="form-control" placeholder="1">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                Episode Name
                <input type="text" name="episode" class="form-control" placeholder="Episode name">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                Quote
                <input type="text" name="quote" class="form-control" placeholder="quote">
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection