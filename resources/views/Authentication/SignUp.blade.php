@extends('layout')

@section('container')

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      
      <div class="col-md-6 col-lg-5">
        <div class="card shadow-sm">
          
          <div class="card-body p-4">
            
            <h3 class="text-center mb-4">Criar Conta</h3>

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error}} </li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form action="/sign-up" method="POST">
              @csrf <!-- Cross Site Reference. Tem que ter-->
              <div class="mb-3">
                <label  for="name"  class="form-label"> Nome </label>
                <input  type="text"   class="form-control"  name="name"   id="nome"   placeholder="Seu nome completo"   required>
              </div>

              <div class="mb-3">
                <label  for="email"   class="form-label"> Email </label>
                <input  type="email"  class="form-control"  name="email"  id="email"  placeholder="exemploseu@email.com"  required>
              </div>

              <div class="mb-3">
                <label  for="password"   class="form-label"> Senha </label>
                <input  type="password"   class="form-control"  name="password"   id="senha"  placeholder="Digite sua senha"  required>
              </div>

              <div class="mb-3">
                <label  for="repetirSenha"  class="form-label"> Repita sua senha </label>
                <input  type="password"   class="form-control"  name="password_confirmation"    id="repetirSenha"   placeholder="Digite sua senha novamente"  required>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                  Criar Conta
                </button>
              </div>

            </form>

          </div>

        </div>
      </div>

    </div>
</div>   

@endsection