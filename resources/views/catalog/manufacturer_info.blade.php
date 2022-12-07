@extends('partials.main')

@section('content')
    {{ Breadcrumbs::render('manufacturer.show', $manufacturer) }}
@endsection