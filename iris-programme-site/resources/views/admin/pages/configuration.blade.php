@extends('admin/layout/master_ad')

@section('content')
<section id="main-content">
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Page d'accueil</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
              <li><i class="icon_document_alt"></i>Configuration</li>
              <li><i class="fa fa-file-text-o"></i> Université</li>
            </ol>
          </div>
        </div>
      <section class="wrapper">


        <!-- Basic Forms & Horizontal Forms ufr-->
        <div class="row " >
              <div class="col-lg-3"> </div>
              <div class="col-lg-2">
              <button  class="btn btn-info popovers">  <a class="btn btn-info popovers" href="Admino">Retour Page d'accueil</a></button>

              </div>
              <div class="col-lg-2" >
              <button  class="btn btn-warning popovers">  <a class="btn btn-warning popovers" href="{{route('config.liste') }}">Consulter Liste</a></button>
              </div>  <div class="col-lg-2"> </div>
              <div class="col-lg-3"> </div>
       </div>

     <br> <br>
     <div class="row ">

         <div class="col-lg-1"> </div>

            <div class=" col-lg-10">

               <section class=" panel">
                    <header class=" panel-heading">
                      AJOUTER UN DEPARTEMENT/UFR
                   </header>
                   <div class="panel-body">
                     <form role="form " action="{{route('departement.store') }}  " method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">NOM ou SIGLE</label>
                          <input name="item_dep" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex:universite 00science">
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
         <div class="col-lg-1"> </div>
            <div class=" col-lg-10">
               <section class=" panel">
                    <header class=" panel-heading">
                      AJOUTER UNE FILIERE
                   </header>
                   <div class="panel-body">
                     <form role="form " action="{{route('filiere.store')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                         <label for="nom">Departement:</label>
                         <select name="id_dep" class="form-control">
                               <option value="0" >Choisir l'UFR ou DEPARTEMENT</option>
                               <?php $i=0; ?>
                                        @foreach($departements as $departement)
                                        <?php $i++; ?>
                                        <option  value="{{$departement->id}}">{{$i}}.{{$departement->item_dep}} </option>
                                        @endforeach
                         </select>
                 </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">NOM  Filiere</label>
                          <input name="item_fil" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex:universite 00science">
                        </div>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                     </form>
                   </div>
                 </section>
             </div>
                <div class="col-lg-1">
           </div>
        </div>


    <!-- Basic Forms & Horizontal Forms ufr-->



        <div class="row">
         <div class="col-lg-1"> </div>
            <div class=" col-lg-10">
               <section class=" panel">
                    <header class=" panel-heading">
                      ENREGISTRER DES MODULES (matiere)
                   </header>
                   <div class="panel-body">
                     <form role="form " action="{{route('module.store')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="nom">Filieres:</label>
                         <select name="id_fil" class="form-control">
                               <option value="0" >Choisir une Filiere</option>
                               <?php $i=0; ?>
                                        @foreach($filieres as $filiere)
                                        <?php $i++; ?>
                                        <option  value="{{$filiere->id}}">{{$i}}.{{$filiere->item_fil}} </option>
                                        @endforeach
                         </select>
                 </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Module</label>
                          <input name="item_mod" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex:universite 00science">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Coefficient</label>
                          <input name="coefficient" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex:universite 00science">
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
         <div class="col-lg-1"> </div>
            <div class=" col-lg-10">
               <section class=" panel">
                    <header class=" panel-heading">
                     Creer Un Code Filiere
                   </header>
                   <div class="panel-body">
                     <form role="form " action="{{route('code.store')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                              <label for="nom">Filiere</label>
                              <select name="id_fil" class="form-control">
                                    <option value="0" >Choisir La Filiere</option>
                                    <?php $i=0; ?>
                                              @foreach($filieres as $filiere)
                                              <?php $i++; ?>
                                              <option  value="{{$filiere->id}}">{{$i}}.{{$filiere->item_fil}} </option>
                                              @endforeach
                              </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">CREER UN CODE </label>
                          <input name="code_item" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex:universite 00science">
                        </div>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                     </form>
                   </div>
                 </section>
             </div>
                <div class="col-lg-1">
           </div>
        </div>


        </div>













     </div>
        <!-- page
         end-->
   </section>
</section>
@endsection
