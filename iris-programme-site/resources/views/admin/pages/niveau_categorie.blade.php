@extends('admin/layout/master_ad')

@section('content')
<section id="main-content">
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Programme</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
              <li><i class="fa fa-home"></i>Salle De cours</li>
              <li><i class="fa fa-file-text-o">Amphithéâtre</i> </li>
            </ol>
          </div>
        </div>
      <section class="wrapper">


      <div class="row">
        <div class="col-lg-1">

          </div>
          <div class=" col-lg-5">
            <section class=" panel">
              <header class=" panel-heading">
                         Enregistrer Une Categorie De programme
              </header>
              <div class="panel-body">
                <form role="form " action="{{route('categorie.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Types Programmes</label>
                    <input name="categorie" type="text" class="form-control" id="exampleInputEmail1" placeholder="EX: ..COURS ,DEVOIR...">
                  </div>
                  <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>
              </div>


            </section>
          </div>

          <div class=" col-lg-5">
            <section class=" panel">
              <header class=" panel-heading">
                         Enregistrer Tous les Niveaux du Systeme LMD
              </header>
              <div class="panel-body">
                <form role="form " action="{{route('niveau.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Niveaux</label>
                    <input name="item_niv" type="text" class="form-control" id="exampleInputEmail1" placeholder="EX: .....">
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

   <!-- Basic Forms & Horizontal Forms-->

<!--============== Barre horizontal de division =================-->
<div class="ftk_sticky2" id="search_input_box">
                    <div class="container   ">
                    <h2 class="ftk_header_text   " >Liste </h2>

                    </div>
    </div>
          <div class="col-sm-12 mt-2">
            <section class="panel">
              <header class="panel-heading bg bg-dark">

              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th></th>

                  </tr>
                </thead>
 <tbody>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

     </tr>


       </tbody>
              </table>
            </section>
          </div>
          <div class="col-sm-1">

          </div>
        </div>



        </tr>




        <div class="row">
            <div class="col-lg-1">

              </div>
              <div class=" col-lg-5">
                <section class="panel ">
                    <header class="panel-heading m-3">
                      <h4>PROGRAMMES</h4>
                    </header>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>N*</th>
                          <th>CATEGORIE PROGRAMMES</th>
                          <th>MODIFIER</th>
                          <th>SUPPRIMER</th>
                        </tr>
                      </thead>
       <tbody>
           @foreach ($categories as $cate)

             <tr>
                  <td>{{$cate->id }} </td>
                  <td>{{$cate->categorie }} </td>
                  <td><a class="btn btn-primary" href="">Modifier</a></td>
                  <td><a class="btn btn-danger" href="">Supprimer</a></td>
            </tr>

            @endforeach

             </tbody>
                    </table>
                  </section>
              </div>

              <div class=" col-lg-5">



                <section class="panel">
                    <header class="panel-heading">
                   <h4 class="">NIVEAUX</h4>
                    </header>
                    <table class="table">
                      <thead>
                        <tr>
                            <th>N*</th>
                            <th>Systeme LMD</th>
                            <th>MODIFIER</th>
                            <th>SUPPRIMER</th>
                        </tr>
                      </thead>
       <tbody>
@foreach ($niveaux as $niveau)


              <tr>
                  <td>{{$niveau->id}} </td>
                  <td>{{$niveau->item_niv}} </td>
                  <td><a class="btn btn-primary" href="">Modifier</a></td>
                  <td><a class="btn btn-danger" href="">Supprimer</a></td>
           </tr>

           @endforeach
             </tbody>
                    </table>
                  </section>
              </div>
              <div class="col-lg-1">

              </div>
            </div>

            <div class="row">
            <div class="col-sm-1">

    </div>




        <!-- page
         end-->
      </section>
    </section>

@endsection
