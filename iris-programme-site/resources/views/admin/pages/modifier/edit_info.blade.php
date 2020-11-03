@extends('admin/layout/master_ad')

@section('content')
<section id="main-content">
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Page d'accueil</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
              <li><i class="icon_document_alt"></i>Page d'accueil</li>
              <li><i class="fa fa-file-text-o"></i> TOP INFO</li>
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
                MODIFIER LE  COMMUNIQUE
              </header>
              <div class="panel-body">
                <form role="form " action="{{route('editer.topn')}}" method="Put"   >
                @csrf
                @method('PUT')


                  <div class="form-group">
                    <label for="exampleInputEmail1"> Entrer l'information   </label>
               <textarea name="titre" id="" cols="30" rows="10"   class="form-control" id="exampleInputEmail1" placeholder="votre Communique "  > </textarea>
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


<!--============== Barre horizontal de division =================-->


        <!-- page
         end-->
      </section>
    </section>

    @endsection
