@extends('admin/layout/master_ad')

@section('content')
<section id="main-content">
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Page d'accueil</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">FTK-Dashboard</a></li>
              <li><i class="icon_document_alt"></i>Page d'ac</li>
              <li><i class="fa fa-file-text-o"></i> Université</li>
            </ol>
          </div>
        </div>
      <section class="wrapper">


        <!--***************************** Basic Forms & Horizontal Forms***************************************************-->


        <div class="row">
            <div class="col-lg-1"> </div>
               <div class=" col-lg-10">
                  <section class=" panel">
                       <header class=" panel-heading">
                       Modifier Un Code Filiere
                      </header>
                      <div class="panel-body">
                        <form role="form"  method="post"  enctype="multipart/form-data" action="{{route('code.update',$code->id )}}">
                               @csrf
                               @method('put')
                           <div class="form-group">
                                 <label for="nom">Filiere</label>
                                 <select name="id_fil" class="form-control">
                                       <option value="0" >Choisir La Filiere</option>
                                       <?php $i=0; ?>
                                                 @foreach($filieres as $filiere)
                                                 <?php $i++; ?>
                                                 <option  value="{{$filiere->id}}">{{$i}}.{{$filiere->item_fil}} </option>
                                                 @endforeach
                                 </select>
                           </div>
                           <div class="form-group">
                             <label for="exampleInputEmail1">CREER UN CODE </label>
                             <input name="code_item" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ex:universite 00science">
                           </div>
                           <button type="submit" class="btn btn-success">Enregistrer</button>
                        </form>
                      </div>
                    </section>
                </div>
                   <div class="col-lg-1">
              </div>
           </div>


 <!--***************************** end Basic Forms & Horizontal Forms***************************************************-->




        <!-- page
         end-->
      </section>
    </section>

    @endsection
