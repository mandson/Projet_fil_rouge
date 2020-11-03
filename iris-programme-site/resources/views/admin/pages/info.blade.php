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
                FAIRE UN COMMUNIQUE
              </header>
              <div class="panel-body">
                <form role="form " action="{{route('info.store')}}" method="post"  enctype="multipart/form-data">
                @csrf



                  <div class="form-group">
                    <label for="exampleInputEmail1"> Entrer l'information   </label>
               <textarea name="titre" id="" cols="30" rows="10"   class="form-control" id="exampleInputEmail1" placeholder="votre Communique " > </textarea>
               </div>



                  <button type="submit" class="btn btn-success">Publié</button>
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
<div class="" id="search_input_box">
                    <div class="container">
                    <h2 class="ftk_header_text" >Liste des Communiques/Top Info </h2>

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
                    <th>Publication N*</th>
                    <th>INFO</th>
                    <th>Date publication</th>
                    <th>Modifier</th>
                    <th>Suprimer</th>
                  </tr>
                </thead>

                <?php $i=0; ?>
                @foreach($infos as $top_info)
                <?php $i++; ?>
 <tbody >
        <tr class="p-5">
            <td><p>N:{{$top_info->id}}</p></td>
            <td><h4>{{$top_info->titre}}</h4></td>
            <td>{{$top_info->created_at}}</td>

            <td>
                <form action="{{ route('info.edit', $top_info->id )  }}" method="post">
                    @csrf
                    @method('GET')
                    <button  class="btn btn-primary" type="submit"   disabled >Modifier</button>
                </form>
            </td>

              <td>
                <form action="{{ route( 'info.destroy', $top_info->id ) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
     </tr>


       </tbody> @endforeach
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
