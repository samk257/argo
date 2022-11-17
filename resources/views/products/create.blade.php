@extends('layouts.base')

@section('content')


	<!-- Add Modal -->
<div class="content container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-7 col-auto">
				<h3 class="page-title">Products</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Ajouter un produit</li>
				</ul>
			</div>
			
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		
			<div class="col-sm-10">

			<div class="card">
				<div class="card-header">
					<h3 class="text-center">Enregister un nouveau produit</h3>

				</div>
				<div class="card-body">
					<div col-sm-6>

					
					
					<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data" class="m-4">
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
									<label>Province</label>
									<input type="text" name="province" value="{{ old('province') }}" class="form-control">
									@error('province')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
                            <div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Maison</label>
									<input type="text" name="maison" value="{{ old('maison') }}" class="form-control">
									@error('maison')
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
										   <option value="{{$category->id}}">{{$category->name}}</option>
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
	</div>
</div>

@stop
