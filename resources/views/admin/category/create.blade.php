@extends('layouts.adminbase')

@section('title', 'Category Create')

@section('content')
<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Add Category</h4>
                </div>
                <!-- row -->
                <div class="row">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Category List</a></li> </ol>
                <div class="col-xl-6 col-lg-12">
                    
                        <div class="card">

                        <div class="form-group">
                            <label>Parent Category</label>
                            <select class="form-control select2" name="parent_id" style"...">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($data as $rs)
                                    <option value="{{$rs->id}}">
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                            <div class="card-header">
                                <h4 class="card-title">Category Elements</h4>
                            </div>
                            <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title" placeholder="Title" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Keywords</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="keywords" placeholder="Keywords" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="description" placeholder="Description" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile" >Choose Image File</label>
                                            </div>
                                        </div>
                    </form>
                    <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status" >
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
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