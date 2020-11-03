@extends('admin/layout/master_ad')

@section('content')
<section id="main-content">
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Programme</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
              <li><i class="icon_document_alt"></i>Programme</li>
              <li><i class="fa fa-file-text-o"></i> Proffessurs</li>
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
             Enregistrer Un Grade
              </header>
              <div class="panel-body">
                <form role="form " action="{{route('grade.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Grade</label>
                    <input name="item_grad" type="text" class="form-control" id="exampleInputEmail1" placeholder="EX: Docteur,Maitre,Pr.">
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

        <div class="row">
        <div class="col-lg-1">

          </div>
          <div class=" col-lg-10">
            <section class=" panel">
              <header class=" panel-heading">
             Enregistrer Un Proffessur
              </header>

              <div class="panel-body">
                <form role="form " action="{{route('prof.store')}}" method="post"  enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input name="nom" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titre de L'actualite">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Prenom</label>
                    <input name="prenom" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titre de L'actualite">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">contact</label>
                    <input name="contact" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>

                  <div class="form-group">
                              <label for="nom">Grade</label>
                              <select name="id_grad" class="form-control">
                                    <option value="0" >Choisir un Grade</option>
                                    <?php $i=0; ?>
                                              @foreach($grades as $grade)
                                              <?php $i++; ?>
                                              <option  value="{{$grade->id}}">{{$i}}.{{$grade->item_grad}} </option>
                                              @endforeach
                              </select>
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
                    <h2 class="ftk_header_text   " >Liste </h2>

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
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>CONTACT</th>
                    <th>EMAIL</th>
                    <th>GRADE</th>
                    <th>Modifier</th>
                    <th>Suprimer</th>
                  </tr>
                </thead>
 <tbody>
    @foreach($proffesseurs as $proffesseur)
        <tr>
            <td>{{$proffesseur-> nom}} </td>
            <td>{{$proffesseur-> prenom}}</td>
            <td>{{$proffesseur-> contact}}</td>
            <td>{{$proffesseur-> email}}</td>
            <td>{{$proffesseur-> grade->item_grad}}</td>

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
