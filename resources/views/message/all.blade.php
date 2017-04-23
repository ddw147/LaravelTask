@extends('layout.sidenav')


@section('title','Inbox')


@section('header')
 <h1>
    All Message
     
  </h1>
	<ol class="breadcrumb">
	<li>Message</li>
	<li>All</li>
	</ol>
@endsection


@section('content')
	
	<div class="box box-solid box-info">
		
		<div class="box-header">
			
		</div>
		@include('message.messages-list')
	</div>
	

@endsection