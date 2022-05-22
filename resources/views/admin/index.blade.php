@extends('layouts.adminbase')
 
@section('title', 'Admin Panel')
 
@section('content')

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Hospital Admin Dashboard Template</p>
					</div>
					<a href="/admin/category/create" class="btn btn-block btn-success btn-lg" 
					style="width:200px" >Add Category</a>
					
				</div>
			</div></div>



@endsection
