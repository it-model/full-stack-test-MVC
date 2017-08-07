@extends('admin.layouts.admin')

@section('title', 'New Product')

@section('content')
    <div class="clearfix"></div>
    
    <div class="container">
        @if(Session::has('message'))
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ Session::get('message') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="col-md-6 col-xs-12">
            <form method="post" action="{{ route('admin.products.store') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label for="product-name">Product Name</label>
                        <input type="text" class="form-control" name="name" id="product-name" placeholder="Product Name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label for="product-description">Product Description</label>
                        <input type="text" class="form-control" name="description" id="product-description" placeholder="Product Description">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label for="product-category">Product Category</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>1</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-2 col-xs-12">
                        <label for="product-quantity">Product Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="product-quantity">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label for="product-picture">Product Picture</label>
                        <input type="file" name="file" id="file">
                        <p class="help-block">The file must have .jpg or .png extension.</p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Clear</button>
            </form>
        </div>
    </div>

@endsection