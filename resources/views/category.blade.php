@extends('layouts.app')
@section('title')
    Categories
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 shadow">
                @if(Session('info'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session('info')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card bg-danger" style="color:white;">
                    <div class="card-header"><i class="fas fa-database"></i> Categories</div>
                    <div class="card-body table-responsive">
                        <table class="table">
                           <tr>
                               <td>ID</td>
                               <td>Barcode</td>
                               <td>Category Name</td>
                               <td>Created Date</td>
                               <td>Actions</td>
                           </tr>
                            @foreach($cats as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>
                                       <?php echo DNS1D::getBarcodeHTML($cat->id, "C39");?>
                                    </td>
                                    <td>{{$cat->cat_name}}</td>
                                    <td>{{$cat->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#e{{$cat->id}}" class="btn btn-outline-light"><i class="fas fa-edit"></i></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="e{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content bg-danger">
                                                    <form method="post" action="{{route('update.category')}}" enctype="multipart/form-data">
                                                        <input type="hidden" name="id" value="{{$cat->id}}">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> {{$cat->cat_name}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="cat_name" style="color: white">Category Name</label>
                                                            <input type="text" name="cat_name" value="{{$cat->cat_name}}" id="cat_name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-outline-light">Save Change</button>
                                                    </div>
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{route('remove.category',['id'=>$cat->id])}}" class="btn btn-outline-light"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                        {{$cats->links()}}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @if(Session('alert'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session('alert')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                <div class="card bg-danger" style="color: white">
                    <div class="card-header"><i class="fas fa-database"></i> New Category</div>
                    <div class="card-body">
                        <form method="post" action="{{route('new.category')}}">
                            <div class="form-group">
                                <label for="cat_name">Category Name</label>
                                <input type="text" name="cat_name" id="cat_name" class="form-control @if($errors->has('cat_name')) is-invalid @endif">
                                @if($errors->has('cat_name'))<span class="invalid-feedback">{{$errors->first('cat_name')}}</span> @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-light btn-lg btn-block">Save</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
