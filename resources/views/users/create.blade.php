@extends('layouts.base')

@section('content')

<div>
	
	<!-- Add Modal -->
	<div class="" id="Add_Specialities_details" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document" >
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ajouter un Agent</h5>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{route('users.store')}}">
						@csrf
						<div class="row form-row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Nom</label>
									<input type="text" name="nom" value="{{ old('nom') }}" class="form-control">
									@error('nom')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Prénom</label>
									<input type="text" name="prenom" value="{{ old('prenom') }}" class="form-control">
									@error('prenom')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" value="{{ old('address') }}" class="form-control">
									@error('address')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Role</label>
									<select name="role" id="role" class="form-control">
										<option value=""></option>
										@foreach ($roles as $role)
										   <option value="{{$role}}">{{$role}}</option>
										@endforeach
									</select>

									
									@error('role')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>

							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Date de Naissance</label>
									<input type="date" name="date_naissance" value="{{ old('date_naissance') }}" class="form-control">
									@error('date_naissance')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>

							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="email" value="{{ old('email') }}" class="form-control">
									@error('email')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>

							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" value="{{ old('password') }}" class="form-control">
									@error('password')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>


							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Image</label>
									<input type="file"  class="form-control">
								</div>
							</div>

						</div>
						<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop