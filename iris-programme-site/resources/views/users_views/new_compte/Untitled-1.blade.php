@extends('admin/layout/master_ad')

@section('content')

<section id="main-content">
      <section class="wrapper">
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

        <!--overview start-->



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



<tr >
 <td><h5>Du  </h5> </td>
 <td><h5>Du  </h5> </td>
 <td><h5>Du  </h5> </td>
 <td><h5>Du  </h5> </td>
 <td><h5>Du  </h5> </td>
</tr>

</tbody>
      </table>
    </section>
  </div>
  <div class="col-sm-1">

  </div>
</div>



</tr>

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
