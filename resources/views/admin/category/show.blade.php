@extends('layouts.adminbase')

@section('title', 'Show Category :'.$data->title)

@section('content')
<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Showing : {{$data->title}}</h4>
                </div>
                <!-- row -->
                <div class="row">
                <ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="route('admin.index')">Home</a></li>
<li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Category List</a></li> </ol>
                <div class="col-xl-6 col-lg-12">
               
                <td><a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-primary mr-2" id="js-programmatic-enable">Edit</a></td>
                                                <td><a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('It will delete! Do you want continue?')"
                                                class="btn btn-danger mr-2" id="js-programmatic-enable">Delete</a></td>
                                
            </div>
            <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <td>Id</td>
                                                <td>{{$data->id}}</td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Title</td>
                                                <td>{{$data->title}}</td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Keywords</td>
                                                <td>{{$data->keywords}}</td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Image</td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>{{$data->status}}</td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Created Date</td>
                                                <td>{{$data->created_at}}</td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Updated Date</td>
                                                <td>{{$data->updated_at}}</td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                     
                </div>
            </div>
        </div>
@endsection