@extends('admin/layout/master_ad')

@section('content')
<section id="main-content">
<div class="row ">
          <div class="col-lg-12 p-2">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Page d'accueil</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
              <li><i class="icon_document_alt"></i>Modification</li>
              <li><i class="fa fa-file-text-o"></i> Liste</li>
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


        <div class="row">
         <div class="col-lg-1"> </div>
            <div class=" col-lg-10">
               <section class=" panel">
                    <header class=" panel-heading">
                    <h3>Modifier  FILIERE {{ old('item_fil', $filiere->item_fil) }}</h3>
                   </header>
                   <div class="panel-body">
                     <form role="form " action="{{route('filiere.update',$filiere->id)}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('put')
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
                          <input name="item_fil" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex:universite 00science"   value="{{ old('item_fil', $filiere->item_fil) }}">

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





        </div>

     </div>
        <!-- page
         end-->
   </section>
</section>
@endsection
