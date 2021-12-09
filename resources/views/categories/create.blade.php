@extends('layout.base')

@section('pageTitle')
    <title>Add Category - Machine Compare Test</title>
    <meta name="description" content="Machine Compare Test Add Category">
@endsection

@section('content')
    <div class="container mt-5">
        <h1>Add Category</h1>
        <form action="{{route('categories.store')}}" method="post" name="frmCategoryCreate" >
        @csrf
        <div class="form-group row py-4">
            <label for="name" class="col-sm-2 col-form-label">Name*</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="categoryName" name="categoryName" aria-describedby="CategoryName" placeholder="Enter Category" required>
            </div>
        </div>
        <button type="submit" class="mt-2 btn btn-success">Save</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if (session('status'))
            <div class="alert alert-success mt-5">
                {{ session('status') }}
            </div>
        @endif

    </div>
@endsection