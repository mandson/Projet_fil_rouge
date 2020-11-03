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




<!--============== Barre horizontal de division =================-->
                <div class="ftk_sticky2" id="search_input_box">
                    <div class="container   ">
                    <h2 class="ftk_header_text" >PROGRAMME EN COURT...</h2>

                </div>
    </div>
          <div class="col-sm-12 mt-2">
            <section class="panel">
              <header class="panel-heading">
                Programme du Mois
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th><h5>DATE</h5></th>
                    <th><h4>CATEGORIE</h4></th>
                    <th><h4>FILIERE</h4></th>
                    <th><h4>Proffesseur</h4></th>
                    <th><h5>DETAIL </h5> </th>
                    <th><h5>Modifier </h5> </th>
                    <th><h5>Suprimer </h5> </th>
                  </tr>
                </thead>
 <tbody>
    @foreach ($programmes as $programme)


        <tr >

            <td><h5>Du :{{$programme->dat_deb}} Au {{$programme->dat_fin}} </h5> </td>
            <td><h5>{{$programme->categorie->categorie}}</h5> </td>
            <td> <h5>{{$programme->filiere->item_fil}}   </h5> {{$programme->filiere->departement->item_dep}} <br> {{$programme->niveau->item_niv}} </td>
            <td><h6> {{$programme->proffesseur->grade->item_grad}} {{$programme->proffesseur->nom}}</h6></td>
            <td><a class="btn btn-success" href="">voir</a></td>
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
