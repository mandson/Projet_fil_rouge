@extends('admin/layout/master_ad')

@section('content')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-file-text-o"></i>COMPTE ETUDIANT</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
                <li><i class="icon_document_alt"></i>COMPTE  ETUDIANTS</li>
                <li><i class="fa fa-file-text-o"></i>LISTE</li>
              </ol>
            </div>
          </div>

        <!--overview start-->



        <div class="ftk_sticky2" id="search_input_box">
            <div class="container   ">
            <h3 class="ftk_header_text" >EN ATTENTE ...</h3>

        </div>
</div>
  <div class="col-sm-12 mt-2">
    <section class="panel">
      <header class="panel-heading">

      </header>
      <table class="table">
        <thead>
          <tr>
            <th><h5>..</h5></th>
            <th><h5>MATRICULE</h5></th>
            <th><h4>NOM</h4></th>
            <th><h4>PRENOM</h4></th>
            <th><h5>E-mail</h5> </th>
            <th><h5>PROCESSUS</h5> </th>
          </tr>
        </thead>
<tbody>


@foreach ($ncomptelistes as $ncompteliste)

<tr >
       <td><h6>{{$ncompteliste->id}}  </h6> </td>
        <td><h6>{{$ncompteliste->matricule}}  </h6> </td>
        <td><h6>{{$ncompteliste->nom}}  </h6> </td>
        <td><h6>{{$ncompteliste->prenom}}  </h6> </td>
        <td><h6>{{$ncompteliste->filiere->item_fil}}  </h6> </td>
        <td><h6>{{$ncompteliste->email}}  </h6> </td>
        <td>
       <button class="btn btn-dark button is-dark " type="submit" disabled>En court.. </button>

                 <a  href="{{route('ncompte.verification',[$ncompteliste->id,$ncompteliste->nom])}}">
                       <button class="btn btn-primary button is-danger" type="submit">Vérifier</button></a>

        <button class="btn btn-danger button is-danger" type="submit">Supprimer</button>
    </form>

    </td>
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



<form action="" method="post">
    {{ csrf_field() }}

    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
    <input type="hidden" name="password_confirmation" placeholder="Mot de passe (confirmation)">
    <input type="submit" value="M'inscrire">
</form>

<!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="#">IRISPROGRAMME-2.1</a>
        </div>
      </div>
    </section>
    @endsection
