@extends('admin/layout/master_ad')

@section('content')
<section id="main-content">
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
      <section class="wrapper">


        <!-- Basic Forms & Horizontal Forms-->
        <div class="row " >
            <div class="col-lg-3"> </div>
            <div class="col-lg-2">
            <button  class="btn btn-info popovers">  <a class="btn btn-info popovers" href="Admino">Retour Page d'accueil</a></button>

            </div>
            <div class="col-lg-2" >
            <button  class="btn btn-warning popovers">  <a class="btn btn-warning popovers" href="{{route('liste.prog') }}">Voir Programmes:Liste</a></button>
            </div>  <div class="col-lg-2"> </div>
            <div class="col-lg-3"> </div>
     </div>




        <div class="row">
        <div class="col-lg-1">

          </div>
          <div class=" col-lg-10">
            <section class=" panel">
              <header class=" panel-heading">
            PUBLIER UN Nouveau Programme
              </header>
              <div class="panel-body">
                <form role="form " action="{{route('programme.store')}}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                              <label for="nom">Type de Programme</label>
                              <select name="id_cat" class="form-control">
                                    <option value="0" >Choisir une Categorie</option>
                                    <?php $i=0; ?>
                                              @foreach($categories as $categorie)
                                              <?php $i++; ?>
                                              <option  value="{{$categorie->id}}">{{$i}}.{{$categorie->categorie}} </option>
                                              @endforeach
                              </select>
                 </div>

                 <div class="form-group">


                              <label for="nom">Filiere</label>
                              <select name="id_fil" class="form-control">
                                    <option value="0" >Choisir une filiere</option>

                                    <?php $i=0; ?>
                                    @foreach($filieres as $filiere)
                                    <?php $i++; ?>
                                              <option  value="{{$filiere->id}}">{{$i}}.{{$filiere->item_fil}} </option>
                                              @endforeach
                              </select>

                 </div>

                 <div class="form-group">

                              <label for="nom">Professeur</label>
                              <select name="id_prof" class="form-control">

                                    <option value="0" >Choisir Professeur</option>
                                    <?php $i=0; ?>
                                    @foreach($proffesseurs as $proffesseur)
                                              <?php $i++; ?>
                                              <option  value="{{$proffesseur->id}}">{{$i}}.{{$proffesseur->nom}} {{$proffesseur->prenom}}</option>
                                              @endforeach
                              </select>

                 </div>
                 <div class="form-group">

                <label for="nom">Niveau</label>
                <select name="id_niv" class="form-control">

                      <option value="0" >Choisir un Niveau</option>
                      <?php $i=0; ?>
                      @foreach($niveaux as $niveau)
                                <?php $i++; ?>
                                <option  value="{{$niveau->id}}">{{$i}}.{{$niveau->item_niv}}</option>
                                @endforeach
                </select>

   </div>



   <div class="form-group">

                <label for="nom">Lieux</label>
                <select name="id_lieu" class="form-control">

                      <option value="0" >Choisir un Espace</option>
                      <?php $i=0; ?>
                      @foreach($salles as $salle)
                                <?php $i++; ?>
                                <option  value="{{$salle->id}}">{{$i}}.{{$salle->item_lieu}}</option>
                                @endforeach
                </select>

   </div>

 <hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Date debut</label>
                    <input name="dat_deb" type="date" class="form-control" id="exampleInputEmail1" placeholder="sectionner une date">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Date Fin</label>
                    <input name="dat_fin" type="date" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                           <strong>Dans la matineé </strong>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Debut</label>
                    <input name="heur_dM" type="time" class="form-control" id="exampleInputEmail1" placeholder="Titre de L'actualite">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Fin</label>
                    <input name="heur_fM" type="time" class="form-control" id="exampleInputEmail1" placeholder="Titre de L'actualite">
                  </div>



                  <strong> <hr> Dans la Soireé </strong>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Debut</label>
                    <input name="heur_dS" type="time" class="form-control" id="exampleInputEmail1" placeholder="Titre de L'actualite">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Fin</label>
                    <input name="heur_fS" type="time" class="form-control" id="exampleInputEmail1" placeholder="Titre de L'actualite">
                  </div>

                  <div class="form-group">
                                        <div class="custom-file">
                                        <input type="file" name="pdf"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Ajouter un Fichier pdf</label>
                                        </div>
                                </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Description plus Detaillé</label>
                      <textarea name="detail" id="" cols="30" rows="10"   class="form-control" id="exampleInputEmail1">Detail </textarea>
               </div>
                  <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>

              </div>


            </section>
          </div>
          <div class="col-lg-1">

          </div>
        </div>

        <div class="row">
        <div class="col-sm-1">

</div>
<hr>

<!--============== Barre horizontal de division =================-->
<div class="ftk_sticky2" id="search_input_box">
                    <div class="container   ">
                    <h2 class="ftk_header_text   " >Programmes</h2>

                    </div>
    </div>
          <div class="col-sm-12 mt-2">
            <section class="panel">
              <header class="panel-heading">
                Liste
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>contact</th>
                    <th>email</th>
                    <th>id-grad</th>
                    <th>Modifier</th>
                    <th>Suprimer</th>
                  </tr>
                </thead>
 <tbody>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a class="btn btn-primary" href="">Modifier</a></td>
            <td><a class="btn btn-danger" href="">Supprimer</a></td>
     </tr>


       </tbody>
              </table>
            </section>
          </div>
          <div class="col-sm-1">

          </div>
        </div>



        </tr>

        <!-- page
         end-->
      </section>
    </section>

@endsection
