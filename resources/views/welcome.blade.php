@extends('layouts.baseclient')

@section('content')

			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center ">
							<h1 class="text-white">Prouits alimentaires , trouvez le</h1>
							<p class="text-light">retrouvez tous vos produits alimentaires </p>
						</div>

						<!-- Search -->
						<div class="search-box">
							<form action="templateshub.net">
								<div class="form-group search-location">
									<input type="text" class="form-control" placeholder="par lieu">
									<span class="form-text">Based sur le  lieu : <strong>entrez un province ou un commune</strong>
									</span>
								</div>
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="aliment  , categories">
									<span class="form-text text-light">Ex : patate douce , haricots etc..</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Recherchez</span></button>
							</form>
						</div>
						<!-- /Search -->

					</div>
				</div>
			</section>
			<!-- /Home Banner -->

			<!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Categories des produits alimentaires</h2>
						<p class="sub-title">trouvez toutes sortes de produits alimentaires: les cereales, les fruits,les legumes etc..</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">

								<!-- Slider Item -->
                                @php
                                    $categories= App\Models\Category::all();
                                @endphp
                                @foreach ($categories as $item)
                                    <div class="speicality-item text-center">
                                        <a href="{{ route('product.bycategory',$item->id) }}">
                                        <div class="speicality-img">
                                            <img src="{{ $item->image }}" class="img-fluid" alt="Speciality">
                                            {{-- <span><i class="fa fa-circle" aria-hidden="true"></i></span> --}}
                                        </div>
                                        <p>{{ $item->name }}</p>
                                    </a>
                                    </div>
                                @endforeach
								<!-- /Slider Item -->

								<!-- /Slider Item -->

							</div>
							<!-- /Slider -->

						</div>
					</div>
				</div>
			</section>
			<!-- Clinic and Specialities -->

			<!-- Popular Section -->
			<section class="section section-doctor">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-lg-12">
							<div class="doctor-slider slider">
                                @php
                                    $products= App\Models\Product::all();
                                @endphp

								<!-- Doctor Widget -->
                                @foreach ($products as $item)
                                    <div class="profile-widget">
                                        <div class="doc-img">
                                            <a href="{{ route('productDetails',$item->id) }}">
                                                <img class="img-fluid" alt="User Image" src="{{ $item->img }}">
                                            </a>
                                            <a href="javascript:void(0)" class="fav-btn">
                                                <i class="far fa-bookmark"></i>
                                            </a>
                                        </div>
                                        <div class="pro-content">
                                            <h3 class="title">
                                                <a href="{{ route('productDetails',$item->id) }}">{{ $item->name }}</a>
                                                <i class="fas fa-check-circle verified"></i>
                                            </h3>
                                            <p class="speciality">{{ $item->description }}</p>
                                           <!--- <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating">(17)</span>
                                            </div>-->
                                            <ul class="available-info">
												<li>
                                                    <i class="fas fa-users"></i>product owner
                                                </li>
												<li>
                                                    <i class="fas fa-info-circle"></i>product category
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt"></i> lieu du produits
                                                </li>
                                               <!-- <li>
                                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                                </li>
                                                <li>-->
                                                    <i class="far fa-money-bill-alt"></i> {{ $item->price }}
                                                    <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                                </li>
                                            </ul>
                                            <div class="row row-sm">
                                                <div class="col-6">
                                                    <a href="{{ route('productDetails',$item->id) }}" class="btn view-btn">details</a>
                                                </div>
                                                <!--<div class="col-6">
                                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
								<!-- /Doctor Widget -->

							</div>
						</div>
				   </div>
				</div>
			</section>
			<!-- /Popular Section -->

		   <!-- Availabe Features -->

			<!-- Availabe Features -->

			<!-- Footer -->

			<!-- /Footer -->

	   </div>
	   <!-- /Main Wrapper -->


@endsection

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
</html>

