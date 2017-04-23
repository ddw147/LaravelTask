@extends('layout.sidenav')


@section('title','Inbox')


@section('header')
 <h1>
    Inbox
     
  </h1>
	<ol class="breadcrumb">
	<li>Mail</li>
	<li>Inbox</li>
	</ol>
@endsection


@section('content')
	
	<div class="box box-solid box-info">
		
		<div class="box-header">
			<a href="/message/create" class="btn btn-success pull-right">  New</a>
		</div>
		
			@include('message.messages-list')
	</div>
	

@endsection