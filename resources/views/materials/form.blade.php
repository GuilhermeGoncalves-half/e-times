@extends('layout')

@section('container')

<div class="container">
  <div class="row justify-content-center min-vh-100 align-items-center">
    
    <div class="col-12 col-xl-10">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

        <div class="bg-primary bg-gradient p-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center">
             <h2 class="text-white fw-bold mb-1">📚 Cadastrar Material</h2>
        </div>

        <div class="card-body p-4">
          

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="" method="POST" enctype="multipart/form-data">
            @csrf()

            @isset($material)
            @method('put')
            @endisset

            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input 
                type="text" 
                class="form-control" 
                name="name" 
                value="{{$material->name ?? null}}"
                id="nome" 
                placeholder="Nome do material" 
                value="{{ old('name') }}"
                required>
            </div>

            <div class="mb-3">
              <label for="descricao" class="form-label">Descrição</label>
              <textarea 
                class="form-control" 
                name="description" 
                id="descricao" 
                rows="3" 
                placeholder="Descreva o material"
                required>{{ $material->description ?? null}}</textarea>
            </div>

            <div class="mb-3">
              <label for="arquivo" class="form-label">Arquivo</label>
              <input 
                type="file" 
                class="form-control" 
                name="file_url" 
                value="{{$material->file_url ?? null}}"
                id="arquivo" 
                required>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">
                Salvar Material
              </button>
            </div>

          </form>

        </div>

      </div>
    </div>

  </div>
</div>   

@endsection