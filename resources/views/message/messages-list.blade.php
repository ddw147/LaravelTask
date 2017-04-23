<div class="box-body">
             @if (session('status'))		    
				@component('alerts.success')
				    	 {{session('status')}}
				@endcomponent
			 @endif


<div class="table-responsive mailbox-messages">
				<table class="table table-hover table-striped">
				<tr>
				@if($view=='inbox' || $view=='all' )		
					<th>From</th>
				@endif
				
				@if($view=='sent' || $view=='all' )	
					<th>To</th>
				@endif

					<th>Title</th>
					<th>Date/Time</th>
				@if(Auth::user()->hasRole('admin'))
					<th>Delete</th>
				@endif	

				</tr>

				@foreach($messages as $message)	
					<tr>
						
					@if($view=='inbox' || $view=='all' )
						<td>{{$message->from_user->name}}</td>
					@endif	

					@if($view=='sent' || $view=='all' )	
						<td>{{$message->to_user->name}}</td>
					@endif


						<td>{{$message->title}}</td>
						<td>{{$message->created_at->diffForHumans(null,true)}} ago</td>
					
					@if(Auth::user()->hasRole('admin'))
						<td>
							<a href="message/{{$message->id}}/delete" class="btnpost" title="delete message"><span class="glyphicon glyphicon-trash"></span></a>
							
						</td>	
					@endif	

					</tr>
				@endforeach
				</table>	
			</div>
</div>
<div class="box-footer">
	{{$messages->links()}}	
</div>
