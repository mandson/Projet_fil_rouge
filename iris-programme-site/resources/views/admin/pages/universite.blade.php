@extends('admin/layout/master_ad')

@section('content')
<section id="main-content">
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Page d'accueil</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
              <li><i class="icon_document_alt"></i>Page d'accueil</li>
              <li><i class="fa fa-file-text-o"></i> Université</li>
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
                Information Sur Votre Université
              </header>
              <div class="panel-body">
                <form role="form " action="{{route('universite.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom de L'Université</label>
                    <input name="nom_uiv" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex:universite 00science">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">ville</label>
                    <input name="ville" type="text" class="form-control" id="exampleInputEmail1" placeholder="situe dans la ville de ">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">contact</label>
                    <input name="contact" type="text" class="form-control" id="exampleInputEmail1" placeholder="tel:0022675107385">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adresse Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="univerite00science@gmail.com">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Historique de votre  université</label>
                    <textarea name="historique" id="" cols="20" rows="10"   class="form-control" id="exampleInputEmail1">Parler de votre  université en quelques </textarea>
                 </div>

               <div class="form-group">
                                        <div class="custom-file">
                                        <input type="file" name="logo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                                        </div>
                                </div>

                  <button type="submit" class="btn btn-warning">Enregistrer</button>
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
      <div class="col-sm-12">
           <section class="panel">
            <header class="panel-heading">
              Parametrage des donne de L'université
            </header>
           <table class="table">
               <thead>
                  <tr>
                    <th>LOGO</th>
                    <th>Nom de l'universite</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>VIlle</th>
                    <th>historique</th>
                    <th>Modifier</th>
                    <th>Suprimer</th>
                  </tr>
              </thead>
                <tbody>
                                    <?php $i=0; ?>
                    @foreach($universites as $universite)
                    <?php $i++; ?>
                 <tr>


                        <td>  <img src=" {{asset('storage').'/'.$universite->logo}}" style="width:100px;height:100px;" class="bf5  rounded-circle">
                        </td>
                        <td>{{$universite->nom_uiv}}</td>
                        <td>{{$universite->email}}</td>
                        <td>{{$universite->contact}}</td>
                        <td>{{$universite->ville}} </td>
                        <td>{{$universite->historique}}</td>
                        <td><a class="btn btn-dark" href="">Modifier</a></td>
                        <td>
                            <form action="{{ route( 'universite.destroy', $universite->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger button is-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
          <div class="col-sm-1">
          </div>

          </div>
        </div>




        <!-- page
         end-->
      </section>
    </section>

    @endsection
