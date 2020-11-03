<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation de compte</title>

    <link rel="stylesheet" href="{{asset('users/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('users/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/animate-css/animate.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('users/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('users/css/monstyle.css')}}">
	<link rel="stylesheet" href="{{asset('users/css/mambastyle.css')}}">
	<link rel="stylesheet" href="{{asset('users/css/eternastyle.css')}}">
</head>
<body class="bg bg-primary p-5">


<div class="container m-5">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Demande De Creation de Compte Etudiant') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ncompte.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="filiere" class="col-md-4 col-form-label text-md-right">{{ __('Filiere') }}</label>

                            <div class="col-md-6">
                                <input id="filiere" type="text" class="form-control @error('filiere') is-invalid @enderror" name="filiere" value="{{ old('filiere') }}" required autocomplete="matricule" autofocus>

                                @error('filiere')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="form-group row">


                                <label for="nom" class="col-md-4 col-form-label text-md-right">Filiere</label>
                                <select name="id_fil" class="form-control col-md-7" required >
                                      <option value="0" >Choisir une filiere</option>

                                      <?php $i=0; ?>
                                      @foreach($filieres as $filiere)
                                      <?php $i++; ?>
                                                <option  value="{{$filiere->id}}">{{$i}}.{{$filiere->item_fil}} </option>
                                                @endforeach

                                </select>

                   </div>

                        </div>
                        <div class="form-group row">
                            <label for="matricule" class="col-md-4 col-form-label text-md-right">{{ __('N* Matricule') }}</label>

                            <div class="col-md-6">
                                <input id="matricule" type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value="{{ old('matricule') }}" required autocomplete="matricule" autofocus>

                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="anniversaire" class="col-md-4 col-form-label text-md-right">{{ __('Date Naissance') }}</label>

                            <div class="col-md-6">
                                <input id="anniversaire" type="date" class="form-control @error('anniversaire') is-invalid @enderror" name="anniversaire" value="{{ old('anniversaire') }}" required autocomplete="anniversaire" autofocus>

                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                              <input id="status" type="number" class="form-control @error('status') is-invalid @enderror" name="status" value="1"  hidden>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">

                            <div class="col-md-3 offset-md-2">
                                <button  class="btn btn-danger">
                                  <a href="/">  {{ __('Annuler') }}</a>
                                </button>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Envoyer ') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
