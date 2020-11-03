@extends('admin/layout/master_ad')

@section('content')
<section id="main-content">
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Page d'accueil</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
              <li><i class="icon_document_alt"></i>Page d'accueil</li>
              <li><i class="fa fa-file-text-o"></i> Actualité</li>
            </ol>
          </div>
        </div>      
      <section class="wrapper">


        <!-- Basic Forms & Horizontal Forms-->

        <div class="row">
        <div class="col-lg-1">
          
          </div>
          <div class=" col-lg-10">
            <section class=" panel">
              <header class=" panel-heading">
                Publier une ACTUALITE
              </header>
              <div class="panel-body">
                <form role="form " action="{{route('actualite.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titre</label>
                    <input name="titre" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titre de L'actualite">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Description plus Detaillé</label>
                      <textarea name="description" id="" cols="30" rows="10"   class="form-control" id="exampleInputEmail1">Detail </textarea>
               </div>

               <div class="form-group">
                                        <div class="custom-file">
                                        <input type="file" name="image"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                                        </div>
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
                    <h2 class="ftk_header_text   " >Liste des Actualités Plubliés</h2>
                        
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
                    <th>image</th>
                    <th>Titre</th>
                    <th>Date publication</th>
                    <th>Modifier</th>
                    <th>Suprimer</th>
                  </tr>
                </thead>
 <tbody>
                        <?php $i=0; ?>
        @foreach($actualites as $actualite)
        <?php $i++; ?>
        <tr>						
            <td>  <img src=" {{asset('storage').'/'.$actualite->image}}" style="width:100px;height:100px;" class="bf5  rounded-circle"> </td>
           
            <td><h4>{{$actualite->titre}}</h4></td>
            <td>{{$actualite->created_at}}</td>
            <td><a class="btn btn-primary" href="">Modifier</a></td>
            <td><a class="btn btn-danger" href="">Supprimer</a></td>
     </tr>

@endforeach
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