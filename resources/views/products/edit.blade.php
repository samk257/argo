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
					<form method="POST" action="{{route('product.update',$products->id)}}" enctype="multipart/form-data">
						@csrf
                        @method('PUT')
						<div class="row form-row">
							<div class="col-12 col-sm-12">
								<div class="form-group">
									<label>Nom</label>
									<input type="text" name="name" value="{{ $products->name }}" class="form-control">
									@error('name')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Prix</label>
									<input type="number" name="price" value="{{ $products->price }}" class="form-control">
									@error('price')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
                            <div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Quantite</label>
									<input type="number" name="quantity" value="{{ $products->quantity }}" class="form-control">
									@error('quantity')
									<span class="text-danger">{{$message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Categories</label>
									<select name="category" id="role" class="form-control">
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
                                    <img class="img-thumbnail" width="200" src="{{ $products->img }}" alt="">
								</div>
                                @error('image')
									<span class="text-danger">{{$message }}</span>
									@enderror
							</div>
                            <div class="col-12 col-sm-12">
								<div class="form-group">
									<label>Details</label>
                                    <textarea name="details" class="form-control" cols="30" rows="10">{{ $products->details }}</textarea>
								</div>
                                @error('details')
									<span class="text-danger">{{$message }}</span>
									@enderror
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-block">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         //var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Etes-Vous sur de supprimer ?`,
             text: "Vous ne verrez plus cette donnee",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }
         });
     });
</script>


@stop
