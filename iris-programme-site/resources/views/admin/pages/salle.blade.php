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
          <div class=" col-lg-10">
            <section class=" panel">
              <header class=" panel-heading">
             Enregistrer Amphithéâtre
              </header>
              <div class="panel-body">
                <form role="form " action="{{route('salle.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Amphithéâtre</label>
                    <input name="item_lieu" type="text" class="form-control" id="exampleInputEmail1" placeholder="EX: .....">
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
                    <h3 class="ftk_header_text" > Liste:Salles  </h3>

                    </div>
    </div>
          <div class="col-sm-12 mt-2">
            <section class="panel">
              <header class="panel-heading">
               Salle de cours
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>N*</th>
                    <th>Salle/Amphie</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                  </tr>
                </thead>
 <tbody>
          @foreach ($salles as $salle)


        <tr>
            <td><h3>00{{ $salle->id}}</h3> </td>
            <td><h3>{{ $salle->item_lieu}}</h3></td>

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
