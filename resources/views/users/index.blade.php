@extends('layouts.base')

@section('content')

<div class="content container-fluid">

	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-7 col-auto">
				<h3 class="page-title">Agents</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Agents</li>
				</ul>
			</div>
			<div class="col-sm-5 col">
				<a href="{{ route('users.create') }} " class="btn btn-primary float-right mt-2">Add</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="datatable table table-hover table-center mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
							<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 162.156px;">#</th>
									<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Specialities: activate to sort column ascending" style="width: 352.734px;">Nom</th>
									<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Specialities: activate to sort column ascending" style="width: 352.734px;">Email</th>
									<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Specialities: activate to sort column ascending" style="width: 352.734px;">Addresse</th>
									<th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 358.109px;">Actions</th>
								</tr>
							</thead>
							<tbody>
								
								@foreach ($users as $element)
									{{-- expr --}}

								<tr role="row" class="odd">
									<td class="sorting_1">{{ $element->id }}</td>
									<td class="sorting_1">{{ $element->name }}</td>
									<td class="sorting_1">{{ $element->email }}</td>
									<td class="sorting_1">{{ $element->address_id }}</td>
						

									
									<td class="text-right">
										
											<a class="btn btn-sm bg-success-light" data-toggle="modal" href="#edit_specialities_details">
												<i class="fe fe-pencil"></i> Edit
											</a>
											<a data-toggle="modal" href="#delete_modal" class="btn btn-sm bg-danger-light">
												<i class="fe fe-trash"></i> Delete
											</a>
										
									</td>
								</tr>
								@endforeach
							</tbody>
						</div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>


	@stop