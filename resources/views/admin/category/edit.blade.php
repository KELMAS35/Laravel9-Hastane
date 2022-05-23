@extends('layouts.adminbase')

@section('title', 'Edit Category :'.$data->title)

@section('content')
<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Edit Category : {{$data->title}}</h4>
                </div>
                <!-- row -->
                <div class="row">
                <ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.index',['id'=>$data->id])}}">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('admin.category.index',['id'=>$data->id])}}">Category List</a></li> </ol>
                <div class="col-xl-6 col-lg-12">
                    
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Category Elements</h4>
                            </div>
                            <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Keywords</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Image upload</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                    </form>
                    <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status" >
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                </div>
                </div>
            </div>
</div>

@endsection