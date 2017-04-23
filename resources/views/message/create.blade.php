@extends('layout.sidenav')


@section('title','Inbox')


@section('header')
 <h1>
    New Message
     
  </h1>
	<ol class="breadcrumb">
	<li>Message</li>
	<li>New</li>
	</ol>
@endsection


@section('content')
	
		

	<div class="box box-solid box-info">
		
		<div class="box-header">
				
		</div>
		<div class="box-body">
		@foreach ($errors->all() as $message) 
			<li>{{$message}}</li>
		@endforeach

	
		{{Form::open([ 'url'=>'message/store', 'method'=>'post' ,'class'=>'form-horizontal'])}}
			<div class="form-group"> 
				 {!! Form::label('user_id', 'User',['class'=>'control-label col-sm-2']); !!}
				 
				<div class="col-sm-10">
				 {!! Form::select('user_id', $users,null ,['class'=>'form-control' , 'placeholder'=>'Select User'] ); !!}
				 </div>	 
			</div>

			<div class="form-group"> 
				 {!! Form::label('title', 'Title',['class'=>'control-label col-sm-2']); !!}
				 
				<div class="col-sm-10">
				 {!! Form::text('title',null ,['class'=>'form-control' , 'placeholder'=>'Enter title'] ); !!}
				 </div>	 
			</div>

			<div class="form-group"> 
				 {!! Form::label('message', 'Message',['class'=>'control-label col-sm-2']); !!}
				 
				<div class="col-sm-10">
				 {!! Form::textarea('message',null ,['class'=>'form-control' , 'placeholder'=>'Enter Message'] ); !!}
				 </div>	 
			</div>

			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">	
				 
					{!!Form::submit('Send',['class'=>'btn btn-info']);!!}
				</div>
			</div>
		{{Form::close()}}	
		</form>		
		</div>

	</div>
	

@endsection