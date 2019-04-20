@extends('layouts.app')

@section('title') Product @endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            @if(Session('info'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session('info')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card bg-danger" style="color: white">
                <div class="card-header"><i class="fas fa-database"></i> Products <span class="badge badge-primary">{{count($pds)}}</span></div>
                <div class="card-body table-responsive">
                    <table class="table table-hover" id="dataTable">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Images</td>
                            <td>Items Name</td>
                            <td>Prices</td>
                            <td>Category</td>
                            <td>Created User</td>
                            <td>Upload Date</td>
                            <td>Actions</td>
                        </tr>
                        </thead>
                        @foreach($pds as $pd)
                            <tr>
                                <td>{{$pd->id}}</td>
                                <td>@if($pd->image)
                                    <img src="{{route('product.image',['img_name'=>$pd->image])}}" class="img-fluid rounded" style="width: 60px;height: 60px;">
                                    @endif</td>
                                <td>{{$pd->product_name}}</td>
                                <td>{{$pd->price}} <i class="fas fa-dollar-sign"></i> </td>
                                <td>{{$pd->category->cat_name}}</td>
                                <td>{{$pd->user->name}}</td>
                                <td>{{$pd->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{route('delete.product',['id'=>$pd->id])}}" class="btn btn-outline-light btn-sm"><i class="fas fa-trash"></i></a>

                                    <a href="{{route('product.edit',['id'=>$pd->id])}}" class="btn btn-outline-light btn-sm"><i class="fas fa-edit"></i></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="e{{$pd->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form method="post" action="{{route('edit.product')}}">
                                                    <input type="hidden" name="id" value="{{$pd->id}}">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>Edit {{$pd->product_name}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="product_name">Product Name</label>
                                                            <input type="text" name="product_name" value="{{$pd->product_name}}" id="product_name" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="price">Price</label>
                                                            <input type="text" name="price" value="{{$pd->price}}" id="price" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="category_id">Category</label>
                                                            <select name="category_id" id="category_id" class="custom-select @if($errors->has('category_id')) is-invalid @endif">
                                                                <option value="">Select Category</option>
                                                                @foreach($cats as $cat)
                                                                    <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('category_id'))<span class="invalid-feedback">{{$errors->first('category_id')}}</span>@endif
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="bedittn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Change</button>
                                                    </div>
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card bg-danger" style="color: white">
                <div class="card-header"><i class="fas fa-database"></i> New Product</div>
                <div class="card-body">
                    <form method="post" action="{{route('new.product')}}" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control @if($errors->has('product_name')) is-invalid @endif">
                            @if($errors->has('product_name'))<span class="invalid-feedback">{{$errors->first('product_name')}}</span>@endif
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control @if($errors->has('price')) is-invalid @endif">
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
                                    <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                    @endforeach
                            </select>
                            @if($errors->has('category_id'))<span class="invalid-feedback">{{$errors->first('category_id')}}</span>@endif

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-light"> Save</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection