@extends('partials.main');

@section('content')
    {{ Breadcrumbs::render('category', $category) }}
@endsection