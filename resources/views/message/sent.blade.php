@extends('layout.sidenav')


@section('title','Inbox')


@section('header')
 <h1>
    Sent Message
     
  </h1>
	<ol class="breadcrumb">
	<li>Mail</li>
	<li>Sent</li>
	</ol>
@endsection


@section('content')
	
	<div class="box box-solid box-info">
		
		<div class="box-header">
			
		</div>
		@include('message.messages-list')
	</div>
	

@endsection