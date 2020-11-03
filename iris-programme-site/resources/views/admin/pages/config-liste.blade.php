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

        <div class="row " >
              <div class="col-lg-3"> </div>
              <div class="col-lg-2">
              <button  class="btn btn-info popovers">  <a class="btn btn-info popovers" href="Admino">Retour Page d'accueil</a></button>

              </div>
              <div class="col-lg-2" >
              <button  class="btn btn-warning popovers">  <a class="btn btn-warning popovers" href="{{route('config.form') }}">Retour Formulaire</a></button>
              </div>  <div class="col-lg-2"> </div>
              <div class="col-lg-3"> </div>
       </div>


      <section class="wrapper">
      <div class="row">
                  <div class="col-lg-1">

                </div>

                <div class="col-lg-10">
                  <section class="panel">
                <div class="panel-body">

            <div class="panel-group m-bot20" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <h3> Liste  Filieres ↓</h3>
                                      </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">

                  <div class="row">
                       <div class="col-lg-12">
                        <section class="panel">
                         <header class="panel-heading">
                            Table
                         </header>

                         <table class="table table-striped table-advance table-hover">
                            <tbody>


                            <tr>
                                <th><i class="icon_pin_alt"></i> N*</th>
                                <th><i class="icon_calendar"></i>FILIERES</th>
                                <th><i class="icon_profile"></i>UFR/Departement</th>


                                <th><i class="icon_cogs"></i> ACTION</th>
                            </tr>



                                        @foreach($filieres as $filiere)
                            <tr>

                                   <td><h4>{{$filiere->id}}</h4></td>
                                 <td><h4>{{$filiere->item_fil}}</h4></td>



                                 <td>{{$filiere->departement->item_dep}}</td>

                              <td>
                                <form action="{{ route('filiere.edit', $filiere->id,$filiere->departement->id)  }}" method="post">
                                    @csrf
                                    @method('GET')
                                    <button  class="btn btn-primary" type="submit" >Modifier</button>
                                </form>
                            </td>

                              <td>
                                <form action="{{ route( 'filiere.destroy', $filiere->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                                </div>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </section>
                    </div>
                    </div>
                </div>
              </div>
                </div>
                </div>
              </div>
              <div class="panel panel-default  ">
                <div class="panel-heading">
                  <h4 class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        <h3> Liste Modules ↓↓</h3>
                                      </a>
                                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                <div class="row">
                       <div class="col-lg-12">
                        <section class="panel">
                         <header class="panel-heading ">
                           Table
                         </header>

                         <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th><i class="icon_pin_alt"></i> N* </th>
                                <th><i class=""></i> MODULE</th>
                                <th><i class=""></i> COEFFICIENT</th>
                                <th><i class="icon_calendar"></i>FILIERE</th>
                                <th><i class=""></i>ACTION</th>
                            </tr>

                            @foreach($modules as $module)
                            <tr>
                                  <td><h4>{{$module->id}}</h4></td>
                                  <td><h4>{{$module->item_mod}}</h4></td>
                                  <td><h4>{{$module->coefficient}}</h4></td>
                                  <td>{{$module->filiere->item_fil}}</td>


                                  <td>
                                    <form action="{{ route('module.edit', $module->id)  }}" method="post">
                                        @csrf
                                        @method('GET')
                                        <button  class="btn btn-primary" type="submit"  >Modifier</button>
                                    </form>
                                </td>

                                  <td>
                                    <form action="{{ route( 'module.destroy', $module->id ) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button  class="btn btn-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </section>
                    </div>
                    </div>
                </div>
              </div>


              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        <h3>Liste:Codes filiere ↓↓↓</h3>
                                      </a>
                                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                <div class="row">
                       <div class="col-lg-12">
                        <section class="panel">
                         <header class="panel-heading ">
                           Table
                         </header>

                         <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th><i class="icon_pin_alt"></i> N* </th>
                                <th><i class=""></i> CODE</th>
                                <th><i class=""></i> FILIERE</th>

                                <th><i class=""></i>Action</th>
                            </tr>

                            @foreach($codes as $code)
                            <tr>
                                  <td>{{$code->id}}</td>
                                  <td><h4>{{$code->code_item}}</h4></td>

                                  <td>{{$code->filiere->item_fil}}</td>

                                  <td>
                                    <form action="{{ route('code.edit', $code->id )  }}" method="post">
                                        @csrf
                                        @method('GET')
                                        <button  class="btn btn-primary" type="submit"  >Modifier</button>
                                    </form>
                                </td>

                                  <td>
                                    <form action="{{ route( 'code.destroy', $code->id ) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button  class="btn btn-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>


                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </section>
                    </div>

                </div>
              </div>
            </div>
            <!--collapse end-->

                    </div>
                  </section>
                </div>
                <div class="col-lg-1">

                </div>
        </div>


        <!-- page
         end-->
   </section>
</section>
@endsection
