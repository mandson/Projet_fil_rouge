@extends('admin/layout/master_ad')

@section('content')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-file-text-o"></i> Programme</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
                <li><i class="icon_document_alt"></i>Programme</li>
                <li><i class="fa fa-file-text-o"></i> PUBLICATION</li>
              </ol>
            </div>
          </div>

        <!--overview start-->









    <!--main content start-->

        <section class="wrapper">
          <div class="row">
            <div class="ftk_sticky2" id="search_input_box">
                <div class="container   ">
                <h2 class="ftk_header_text" >VERIFICATION DES INFOS ...</h2>

            </div>
          <div class="row">
            <!-- profile-widget -->
            <div class="col-lg-12">
              <div class="profile-widget profile-widget-info">
                <div class="panel-body">

                  <div class="col-lg-4 col-sm-4 follow-info">

                  </div>
                  <div class="col-lg-5 col-sm-6  weather-category">
                    <ul>
                      <li class="active">

                        <i class="fa fa-comments fa-3x"> </i><br>
                        <h6> Vérifier si les informations enregistrer par l'étudiant
                            sont correctes en cliquant
                            sur le menu <strong>profile</strong> tous juste en dessous ensuite ...   cliquer sur Le Bouton valider pour
                            <strong>activer le compte</strong> de l’étudiant et <strong> Notification</strong> pour l'envoyer une notification
                        </h6>
                       </li>

                    </ul>
                  </div>


                </div>
              </div>
            </div>
          </div>
          <!-- page start-->
          <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading tab-bg-info">
                  <ul class="nav nav-tabs">
                    <li class="active">

                    </li>
                    <li>
                      <a data-toggle="tab" href="#profile">
                                            <i class="icon-user"></i>
                                            Profile
                                        </a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#edit-profile">
                                            <i class="icon-envelope"></i>
                                         voir Guide!
                                        </a>
                    </li>
                  </ul>
                </header>
                <div class="panel-body">
                  <div class="tab-content">

                    <!-- profile -->
                    <div id="profile" class="tab-pane">
                      <section class="panel">
                        <div class="bio-graph-heading">
                                  <h3>IRISPROGRAMME</h3>
                        </div>
                        <div class="panel-body bio-graph-info">
                          <h1> Compte N:A000{{$ncompteliste->id}}</h1>
                          <div class="row">
                            <div class="bio-row">
                              <p><span>NOM</span>:{{$ncompteliste->nom}} </p>
                            </div>
                            <div class="bio-row">
                              <p><span>Prenom</span>:{{$ncompteliste->prenom}}</p>
                            </div>
                            <div class="bio-row">
                              <p><span>Date de naissance</span>:{{$ncompteliste->anniversaire}}</p>
                            </div>
                            <div class="bio-row">
                              <p><span>Matricule</span>:{{$ncompteliste->matricule}}</p>
                            </div>
                            <div class="bio-row">
                              <p><span>Email</span>:{{$ncompteliste->email}}</p>
                            </div>
                            <div class="bio-row">
                              <p><span>Filiere </span>:{{$ncompteliste->filiere}}</p>
                            </div>
                            <div class="bio-row">
                              <p><span>Mobile </span>: (+6283) 456 789</p>
                            </div>
                            <div class="bio-row">
                              <p><span>Inscrit le:</span>:{{$ncompteliste->created_at}}</p>
                            </div>
                          </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <input id="name" hidden type="text" class=" form-control @error('name') is-invalid @enderror" name="name" value="{{$ncompteliste->nom}}" >
                            <input hidden type="email"     name="email"   value="{{$ncompteliste->email}}">
                            <input hidden  type="password"     name="password"   value="{{$ncompteliste->nom}}{{$ncompteliste->matricule}}">
                            <input hidden  type="password"     name="password_confirmation"   value="{{$ncompteliste->nom}}{{$ncompteliste->matricule}}">
                            <input hidden type="number"     name="is_admin"   value="0">

                            <button type="submit" class="">

                                <span class="border badge bg-success">Valider</span>

                            </button>

                       </form>




                   </form>

                   <div>
                    @if (session()->has('text'))
                    <p>{{ session('text') }}</p>
                    @endif

                    <form method="POST" action="{{ route('email.compte.active')}}"  >
                        <label for="message" >Notification</label>

                        @csrf
                        <p>
                             <input  hidden type="number" value="{{$ncompteliste->id}}" name="id">
                            <textarea  hidden name="message" id="message" name="textarea" rows="10" cols="50">Bonjour !  {{$ncompteliste->nom}}
                                Nous Vous Informons Que Votre compte a bien ete  Activer!

                                 Vous pouvez maintenant vous connecter a la plateform Universitaire Irisprogramme.

                                  par votre adress Email: {{$ncompteliste->email}}
                                  Votre mots de passe par defaut est:
                                '' un{{$ncompteliste->nom}}{{$ncompteliste->matricule}}''


                                Se connecter: http://127.0.0.1:8000/login

                                Ceci est un mail automatique, Merci de ne pas y répondre.
                            </textarea>
                            {{ $errors->first('message', ":message")}}
                        </p>
                        {{-- envoye de mail --}}

                        <button type="submit" class="">
                            <i class="icon-envelope-l"></i>
                            <span class="border badge bg-bleu">Envoyer une notification</span>

                        </button>
                    </form>
                   </div>
                      </section>

                      <section>
                        <div class="row">

                            <form method="post" action="{{route('ncompte.terminer',$ncompteliste->id)}}">
                                @csrf
                                    @method('put')

                                <input   type="text"  name="nom" value="{{ old('nom', $ncompteliste->nom) }}" >
                                <input   type="text"  name="prenom" value="{{ old('prenom', $ncompteliste->prenom) }}" >
                                <input   type="text"  name="filiere" value="{{ old('filiere', $ncompteliste->filiere) }}" >
                                <input   type="text"  name="matricule" value="{{ old('matricule', $ncompteliste->matricule)}}" >
                                <input   type="text"  name="anniversaire" value="{{ old('anniversaire', $ncompteliste->anniversaire) }}" >
                                <input   type="text"  name="status" value="0" >
                                <input   type="text"          name="email" value="{{ old('email', $ncompteliste->email) }}" >

                                <button type="submit" class="">

                                    <span class="border badge bg-warning">Terminer</span>

                                </button>

                           </form>


                        </div>
                      </section>
                    </div>
                    <!-- edit-profile -->
                    <div id="edit-profile" class="tab-pane">
                      <section class="panel">

                        <h4>
                        <p>
                            Vérifier si les informations enregistrer par l'étudiant
                            sont correctes en cliquant
                            sur le menu <strong>profile</strong> tous juste en dessous ensuite ...   cliquer sur Le Bouton valider pour
                            <strong>activer le compte</strong> de l’étudiant et <strong> Notification</strong> pour l'envoyer une notification

                            Dans le cas contraire ,vous pouvez refuser la demande en d'inscription en cliquant sur le Bouton Bloquer

                        </p>
                        </h4>
                      </section>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>

          <!-- page end-->





        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="#">IRISPROGRAMME-2.1</a>
        </div>
      </div>
    </section>
    @endsection
