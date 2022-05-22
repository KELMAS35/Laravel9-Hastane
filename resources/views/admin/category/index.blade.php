@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
<div class="content-body">

            <div class="container-fluid">
                <div class="page-titles">
					<h4>Category List</h4>
                </div>
            
                <div class="col-lg-12">
                <ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="/admin">Home</a></li>
<li class="breadcrumb-item active">Category List</li> </ol>
                        <div class="card">
                            <div class="card-header">
                        
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Keywords</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                                <th scope="col">Show</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $rs)
                                            <tr>
                                                <th>{{$rs->id}}</th>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->keywords}}</td>
                                                <td>{{$rs->description}}</td>
                                                <td>{{$rs->image}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="/admin/category/edit{{$rs->id}}" class="btn btn-primary mr-2" id="js-programmatic-enable">Edit</a></td>
                                                <td><a href="/admin/category/edit{{$rs->id}}"class="btn btn-danger mr-2" id="js-programmatic-enable">Delete</a></td>
                                                <td><a href="/admin/category/edit{{$rs->id}}"class="btn btn-success mr-2" id="js-programmatic-enable">Show</a></td>
                                                
                                            </tr>
                                            
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection