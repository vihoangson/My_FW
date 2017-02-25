@extends('layouts.master')
@section('title', $title_page)
@section('content')
    <div class="well">Section: Content page</div>
    <pre>Variable: {{$content_page}}</pre>
    <button class="btn btn-primary btn-lg btn-block">Save !!!</button>
@endsection
