@extends('users_views/layouts/master')

@section('content')


		<!--================ 3 CADRE DU MENUE MON EMPLOI =================-->
		<section class="feature_area  ">
			<div class="container mt-5">
				<div class="row justify-content-end ">
					<div class="col-lg-4   mt-4">
						<div class="single_feature d-flex flex-row pb-20  ">
							<div class="icon">
								<span class="lnr lnr-book"></span>
							</div>
							<div class="desc">
								<h4>PROGRAMME</h4>
								<p>
									In the history of modern astronomy, there is probably no one greater leap forward building and launch.
								</p>
							</div>
						</div>
						<div class="single_feature d-flex flex-row pb-30">
							<div class="icon">
								<span class="fa fa-trophy"></span>
							</div>
							<div class="desc">
								<h4>OEIL DU CAMPUS</h4>
								<p>
									In the history of modern astronomy, there is probably no one greater leap forward building and launch.
								</p>
							</div>
						</div>
						<div class="single_feature d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-screen"></span>
							</div>
							<div class="desc">
								<h4>FORUM</h4>
								<p>
									In the history of modern astronomy, there is probably no one greater leap forward building and launch.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<!--================DEBUT Section PROGRAMME =================-->
	<hr>

	<div class="section-top-border text-right popular_courses lite_bg p-3  ftk_marge ">
	<div class="ftk_sticky2 ftk_marge " id="search_input_box">
					<div class="container   ">
					<h2 class="ftk_header_text  " >programmes DE LA SEMAINES :UFR-SEG</h2>

					</div>
                </div>
                @foreach ($programmes as $programme)


				<div class="section-top-border text-right popular_courses lite_bg p-3  ml-5 mr-4 mb-1 slow-transition mt-2">
					<h3 class="mb-30 title_color text-center bg bg-warning ftk_header_text  ">{{$programme->filiere->departement->item_dep}} - {{$programme->filiere->item_fil}} -{{$programme->niveau->item_niv}}</h3>
					<div class="row">
						<div class="col-md-8 text-center">
                            <h2 class="text-center "> </h2>
						<h2 class="text-center "> {{$programme->categorie->categorie}}</h2>
							<p class="text-center">
                                <h3>Du :{{$programme->dat_deb}} Au {{$programme->dat_fin}}*
                                </h3>

							<p class="text-center">
								<ul  class="text-center">
									<li>Lieu:{{$programme->lieu->item_lieu}}</li>
									<li>Enseignant:{{$programme->proffesseur->grade->item_grad}}  {{$programme->proffesseur->nom}}</li>
									<li>Volume Horaire:21H</li>
									<td><a class="btn btn-warning" href=" {{asset('storage').'/'.$programme->pdf}}" download="IRISPROGRAMME-Mon-Emplois-du-temps"  title="Bootstrap 3 themes generator"><span class="icon_download "></span> Telecharger l'emplois du temps</a></td>

								</ul>

							</p>

						</div>
						<div class="col-md-4">
							<img src="users/img/elements/d.jpg" alt="" class="img-fluid ml-5">
						</div>
					</div>
				</div>
                @endforeach



	<!--================Fin Section communique officiel =================-->

	<div class="ftk_sticky2 mt-2  " id="search_input_box">
					<div class="container   ">
					<h2 class="ftk_header_text  " > </h2>

					</div>
				</div>



		<!--================ Start Testimonial Area =================-->





	</div>




@endsection
