@extends('layouts.base')

@section('content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Categories des produits</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Ajouter un nouveau</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nouveau category</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
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
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Category Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    @error('image')
                                        <span class="text-danger">{{$message }}</span>
                                        @enderror
                                </div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
					</form>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
@endsection
