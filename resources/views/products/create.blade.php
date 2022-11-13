@extends('layouts.base')

@section('content')

<div>

	<!-- Add Modal -->
	<div class="" id="Add_Specialities_details" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document" >
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ajouter un Prix</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
						@csrf
						<div class="row form-row">
							<div class="col-12 col-sm-12">
								<div class="form-group">
									<label>Nom</label>
									<input type="text" name="name" value="{{ old('name') }}" class="form-control">
									@error('name')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Prix</label>
									<input type="number" name="price" value="{{ old('price') }}" class="form-control">
									@error('price')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
                            <div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Quantite</label>
									<input type="number" name="quantity" value="{{ old('quantity') }}" class="form-control">
									@error('quantity')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Categories</label>
									<select name="category" id="role" class="form-control">
										<option value=""></option>
										@foreach ($categories as $category)
										   <option value="{{$category}}">{{$category}}</option>
										@endforeach
									</select>
									@error('category')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Image</label>
									<input type="file" name="image" class="form-control">
								</div>
                                @error('image')
									<span class="text-danger">{{$message }}</span>
									@enderror
							</div>
                            <div class="col-12 col-sm-12">
								<div class="form-group">
									<label>Details</label>
                                    <textarea name="details" class="form-control" cols="30" rows="10"></textarea>
								</div>
                                @error('details')
									<span class="text-danger">{{$message }}</span>
									@enderror
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
