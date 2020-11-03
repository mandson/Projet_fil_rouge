@extends('users_views/layouts/master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/">Accueil</a></li>
        <li>Vue a L'international</li>
      </ol>
      <h1>Actualité-International</h1>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container">

      <div class="row">
        <div class="col-lg-2 entries">

        </div>
        <div class="col-lg-9 entries">
            @if(isset($popular))
            @foreach($popular->articles as $popular)

          <article class="entry mt-5">

            <div class="entry-img">
            <img src="{{$popular->urlToImage}}" alt=""  class="img-fluid">

            </div>

            <h2 class="entry-title">
              <a href="{{$popular->url}}">{{$popular->title}}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content p-3">
              <p>
              {{$popular->description}}  </p>
              <div class="read-more mt-4">
                <a href="{{$popular->url}}">voir plus</a>
              </div>
            </div>

          <br><br><br>
          </article><!-- End blog entry -->
          @endforeach
          @endif
        </div><!-- End blog entries list -->

        <div class="col-lg-2 entries">

        </div>
    </div>
    </div>
  </section><!-- End Blog Section -->
@endsection
