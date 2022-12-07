@extends('partials.main')

@section('content')
{{ Breadcrumbs::render('product', $product) }}
@endsection