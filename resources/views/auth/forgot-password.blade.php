@extends('layout.app')
@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Réinitialisez votre mot de passe</h1>
                    <p class="mb-4">Entrez l'adresse e-mail vérifiée de votre compte utilisateur et nous vous enverrons un lien de réinitialisation du mot de passe.</p>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter votre adresse mail...">
                    </div>
                    <a href="login.html" class="btn btn-primary btn-user btn-block">
                      Envoyer un e-mail de rénitialisation du mot de passe
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    Vous n'avez pas encore de compte ?
                    <a class="small" href="{{route('register')}} "> Inscrivez-vous gratuitement</a>
                  </div>
                  <div class="text-center">
                    Vous avez déjà un compte ?
                    <a class="small" href="{{route('login')}} "> Connectez-vous</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
@endsection