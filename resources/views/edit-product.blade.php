@extends('layouts.app')

@section('title') Edit Page @stop

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow">
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                    <form method="post" action="{{route('update.product')}}" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$pd->id}}">
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input value="{{$pd->product_name}}" type="text" name="product_name" id="product_name" class="form-control @if($errors->has('product_name')) is-invalid @endif">
                            @if($errors->has('product_name'))<span class="invalid-feedback">{{$errors->first('product_name')}}</span>@endif
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input value="{{$pd->price}}" type="number" name="price" id="price" class="form-control @if($errors->has('price')) is-invalid @endif">
                            @if($errors->has('price'))<span class="invalid-feedback">{{$errors->first('price')}}</span>@endif
                        </div>
                        <div class="form-group">
                            <label for="image">Select Image</label>
                            <input type="file" name="image" id="image" class="form-control @if($errors->has('image')) is-invalid @endif ">
                            @if($errors->has('image'))<span class="invalid-feedback">{{$errors->first('image')}}</span>@endif
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="custom-select @if($errors->has('category_id')) is-invalid @endif">
                                <option value="">Select Category</option>
                                @foreach($cats as $cat)
                                    <option @if($cat->id==$pd->category_id) selected @endif value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category_id'))<span class="invalid-feedback">{{$errors->first('category_id')}}</span>@endif

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop