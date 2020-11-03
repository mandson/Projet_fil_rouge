@extends('users_views/layouts/master')

@section('content')


<div class=""><marquee behavior="" direction=""><h2>Bienvenue sur l agenda numérique de  @foreach($universites  as $universite) {{$universite->nom_uiv}} 	@endforeach</h2></marquee> </div>
  <!--================ Start Department Area =================-->



  <div class="department_area section_gap border  ">

        <div class="container ">
            <div class="row align-items-center  ">

                <div class="col-lg-5 ">

                    <div class="dpmt_courses">

                        <div class="row">
                            @foreach($filieres as $filiere)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center  ">
                                <div class="single_department ftk_border">

                                    <h4>{{$filiere->departement->item_dep}}</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>

                @foreach($universites as $universite)
                <div class="offset-lg-1 col-lg-5 entry border">

                   <article class="entry mt-5">

                        <div class="entry-img">
                          <img  src=" {{asset('storage').'/'.$universite->logo}}" alt=""  class="img-fluid ">
                        </div>
                           <h1 class="entry-title pl-5 ml-5 m-5  align-items-center">
                                <strong>{{$universite->nom_uiv}}</strong>
                           </h1>

                        <div class="entry-content ">
                          <p>
                            {{$universite->historique}}  </p>
                          <div class="read-more mt-4">
                            <a href="">voir plus</a>
                          </div>
                        </div>

                      <br><br><br>
                 </article>

                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--================ End Department Area =================-->

<!--============== Barre horizontal de division =================-->
<div class="ftk_sticky2  p-3 mb-3" id="search_input_box">
    <div class="container   ">
    <h3 class="ftk_header_text  " >communiques  de @foreach($universites  as $universite) {{$universite->nom_uiv}} 	@endforeach  </h3>

    </div>
</div>
<!--================Fin Barre horizontal de division =================-->

<!--================DEBUT Section communique officiel =================-->
<hr>


<!--============== Barre horizontal de division =================-->
<div class="ftk_sticky2 " id="search_input_box">
                    <div class="container   ">
                    <h1 class="ftk_header_text  " >Les dernières nouvelles de l'université</h1>

                    </div>
    </div>
<!--================Fin Barre horizontal de division =================-->

	<!--================ TOP ACTUALITE Courses Area =================-->
	<div class=" lite_bg ">
		<div class="container bg bg-white border">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
					<h2>Dernieres infos </h2>
						<p>Toute l'actualité sur le sujet Éducation. Consultez
                        l'ensemble des articles, reportages, directs, </p>	</div>
				</div>
            </div>
    <section id="blog" class="blog">
              <div class="container ">
    <div class="row">
        <div class="col-lg-8 entries">
         @foreach($actualites as $actualite)
            <article class="entry">
              <div class="entry-img">
                 <img src=" {{asset('storage').'/'.$actualite->image}}" style="width:900px;height:400px;" class="bf5  "> </td>
              </div>
              <h2 class="entry-title">
                <a href="blog-single.html">{{$actualite->titre}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"> @foreach($universites  as $universite) {{$universite->nom_uiv}} 	@endforeach</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$actualite->created_at}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">Commentaire</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {{$actualite->description}}
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Lire plus</a>
                </div>
              </div>
            </article><!-- End blog entry -->
            @endforeach
       </div>


       <div class=" container col-lg-4 entries">
        @foreach($infos as $info)
        <section class="entry mt-5 border">
<div class="slow-transition">
     <div  class="text-center ">
    <h3 class="text-center bg bg-danger ftk_header_text">URGENT!!!: </h3>

          <p class="text-center pt-3">
           {{$info->titre}}
          </p>
        </div>
        <div class="entry-meta pt-2">
            <ul>
              <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"> @foreach($universites  as $universite) {{$universite->nom_uiv}} 	@endforeach</a></li>
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$actualite->created_at}}</time></a></li>
              <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">Commentaire</a></li>
            </ul>
          </div>
        </section><!-- End blog entry -->
        @endforeach
      </div>

    </section>


	</div>
	<!--================ End Popular Courses Area =================-->
<br>



@endsection

