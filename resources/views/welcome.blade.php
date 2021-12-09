@extends('layout.base')

@section('pageTitle')
<title>Machine Compare Test</title>
<meta name="description" content="Machine Compare Test Home Pages">
@endsection

@section('content')
<div class="container mt-5">
    <h1>Welcome to Coding Test</h1>
    <a type="button" href="{{route('products.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Product</a>
    <a type="button" href="{{route('categories.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Category</a>
</div>
@endsection