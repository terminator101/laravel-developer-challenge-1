@extends('tvquotes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show quote</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('tvquotes.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <strong>TV Series:</strong>
            <div class="form-group">{{ $tvquote->tv_series }}</div>
        </div>
        <div class="col-12">
            <strong>Season</strong>
            <div class="form-group">{{ $tvquote->season }}</div>
        </div>
        <div class="col-12">
            <strong>Episode</strong>
            <div class="form-group">{{ $tvquote->episode }}</div>
        </div>
        <div class="col-12">
            <strong>Quote</strong>
            <div class="form-group">{{ $tvquote->quote }}</div>
        </div>
    </div>
@endsection