@extends('layout.base')

@section('pageTitle')
    <title>Add Product - Machine Compare Test</title>
    <meta name="description" content="Machine Compare Test Add Product">
@endsection

@section('content')
    <div class="container mt-5">
        <h1>Add Product</h1>
        <form action="{{route('products.store')}}" method="post" name="frmProductsSave" >
            @csrf
            <!-- Product Name -->
            <div class="form-group row py-4">
                <label for="name" class="col-sm-2 col-form-label">Name*</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="productName" name="productName" aria-describedby="ProductName" placeholder="Enter Product Name" required>
                </div>
            </div>
            <!-- End Product Name -->

            <!-- Quantity -->
            <div class="form-group row py-4">
                <label for="name" class="col-sm-2 col-form-label">Category*</label>
                <div class="col-sm-10">
                    <select name="category" class="form-control" required>
                        @foreach ($categories as $key => $category)
                            <option value="{{ $key }}">{{$category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- End of Quantity -->


            <!-- Quantity -->
            <div class="form-group row py-4">
                <label for="name" class="col-sm-2 col-form-label">Quantity*</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="productQuantity" name="productQuantity" aria-describedby="productQuantity" placeholder="Enter Product Quantity" required>
                </div>
            </div>
            <!-- End of Quantity -->



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