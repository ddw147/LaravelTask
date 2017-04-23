@extends('layout.sidenav')

@section('title','User List')


@section('header')
 <h1>
    User List
     
  </h1>
	<ol class="breadcrumb">
	<li>Home</li>
	<li>Users List</li>
	</ol>
@endsection

@section('content')
	 
 		<div class="box">
            <div class="box-header">
              {{-- <h3 class="box-title">User List</h3> --}}
            </div>
            <!-- /.box-header -->
            <div class="box-body ">
             @if (session('status'))		    
				@component('alerts.success')
				    	 {{session('status')}}
				@endcomponent
			 @endif


            <form>
             
            <div class="form-group col-sm-6">	
            <label for="name" >Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="enter name to search" value="{{Request::input('name')}}">
            </div>

            <div class="form-group col-sm-6">	
            <label for="mobile" >Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="enter mobile to search" value="{{Request::input('mobile')}}">
            </div>

            <div class="form-group col-sm-6">	
            <label for="email" >Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="enter email to search" value="{{Request::input('email')}}">
            </div>

             <div class="form-group col-sm-6">	
            	<label for="email" >Block Status</label>
				<select name="is_locked" class="form-control" >
					<option value=""  >All</option>
					<option value="1" {{ Request::input('email')=="1"?'selected':'' }}> Blocked</option>
					<option value="0" {{ Request::input('email')=="0"?'selected':'' }} >Un Blocked</option>
				</select>            				

            </div>
			
			<div class="form-group col-sm-12">	
				<center>
            	<button name="search" id="search" class="btn btn-primary">Search</button>	
            	</center>
            </div>	

            </form>	
            
            @if(Auth::user()->can('create-user'))
            <div class="col-sm-12">
            <a href="/users/create" class="btn btn-info pull-right">Add New</a>
            </div>
            @endif

            <?php $i=0; ?>			
			<table class="table table-bordered">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Mobile	</th>
					<th>Email</th>

				@if(Auth::user()->hasRole('admin'))	
					<th>Roles</th>
				@endif	
					
					<th >Action</th>
									
				</tr>
				@foreach($users as $user)
				<tr>
					<td>{{++$i}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->mobile}}	</td>
					<td>{{$user->email}}</td>
					@if(Auth::user()->hasRole('admin'))
					<td>
						@foreach($user->roles as $role)
						{{$role->name}} 
							 @if (!$loop->last) 
							 ,
							 @endif 
						@endforeach
					</td>
					@endif
						<td  >
							 
							@if(Auth::user()->can('edit-user') || Auth::user()->id == $user->id) 
							<a href="/users/{{$user->id}}/edit"><i class="fa fa-pencil" title="edit"></i> </a> &nbsp;
							@endif

							@if(Auth::user()->can('block-user'))
								@if($user->is_blocked)									
									<a href="/users-unblock/{{$user->id}}" class="btnpost"><i class="fa  fa-recycle" title="Un block this User"></i></a>
								@else
									<a href="/users-block/{{$user->id}}" class="btnpost"><i class="fa fa-ban" title="Block this User"></i></a>
								@endif 
							@endif 
						</td>
				</tr>
				@endforeach	
			</table>
			</div>
			<div class="box-footer">
					{{$users->appends(Request::except('page'))->links()}}
			</div>
		</div>

		
		 
@endsection