		<div class="form-group">
				 
				 
				 {!! Form::label('name', 'Full Name',['class'=>'control-label col-sm-2']); !!}
				 
				<div class="col-sm-10">
				 {!! Form::text('name', null ,['class'=>'form-control' , 'placeholder'=>'Enter Full Name'] ); !!}
				 </div>	 
			</div>

			<div class="form-group">
								 
				 {!! Form::label('email', 'Email' ,['class'=>'control-label col-sm-2']); !!}
				 
				<div class="col-sm-10">
				 {!! Form::text('email', null ,['class'=>'form-control' , 'placeholder'=>'Enter Email '] ); !!}
				 </div>	 
			</div>

			<div class="form-group">
								 
				 {!! Form::label('mobile', 'Mobile' ,['class'=>'control-label col-sm-2']); !!}
				 
				<div class="col-sm-10">
				 {!! Form::text('mobile', null ,['class'=>'form-control' , 'placeholder'=>'Enter Mobile '] ); !!}
				 </div>	 
			</div>

			@if(!isset($user))

			<div class="form-group">
								 
				 {!! Form::label('password', 'Password' ,['class'=>'control-label col-sm-2']); !!}
				 
				<div class="col-sm-10">
				 {!! Form::password('password' ,['class'=>'form-control' , 'placeholder'=>'Enter Password '] ); !!}
				 </div>	 
			</div>

			<div class="form-group">
								 
				 {!! Form::label('password_confirmation ', 'Confim Password' ,['class'=>'control-label col-sm-2']); !!}
				 
				<div class="col-sm-10">
				 {!! Form::password('password_confirmation' ,['class'=>'form-control' , 'placeholder'=>'Confim Password '] ); !!}
				 </div>	 
			</div>
			@endif


			@if(Auth::user()->hasRole('admin'))
			<div class="form-group">
								 
				 {!! Form::label('roles', 'Roles' ,['class'=>'control-label col-sm-2']); !!}
				 
				<div class="col-sm-10">
				

				 @foreach($roles as $role)
				 <div class="checkbox icheck">
					 <label>
					 	{!! Form::checkbox('roles[]',$role->id,false,[] ) !!} 
					 	{{$role->display_name}}
					 </label>
				 </div> 
				 
				 
				 @endforeach
				
				 </div>	 
			</div>
			@endif
			<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">	
			 
				{!!Form::submit('SAVE',['class'=>'btn btn-info']);!!}
			</div>
			</div>