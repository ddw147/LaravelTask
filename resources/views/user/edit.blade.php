@extends('layout.sidenav')

@section('title','Edit User')


@section('header')
 <h1>
   Edit User
     
  </h1>
	<ol class="breadcrumb">
	<li>Home</li>
	<li>Users</li>
	<li>Edit User</li>
	</ol>
@endsection

@section('content')
	 
		<div class="box">
		<div class="box-header">
		  {{-- <h3 class="box-title">User List</h3> --}}
		</div>
		<!-- /.box-header -->
		<ul>
		@foreach ($errors->all() as $message) 
			<li>{{$message}}</li>
		@endforeach
		</ul>

		<div class="box-body ">
			 {!! Form::model($user, ['route' => ['users.update', $user->id] , 'class'=>'form-horizontal' , 'method'=>'PATCH' ]) !!}
			  	
			  	@include('user.form')

			{!! Form::close() !!}
			 
		 
			</div>
			<div class="box-footer">
					 
			</div>
		</div>
		 
@endsection


@section('scripts')
@endsection