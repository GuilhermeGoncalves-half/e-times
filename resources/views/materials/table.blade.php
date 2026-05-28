@extends('layout')

@section('container')

<div class="container">
  <div class="row justify-content-center min-vh-100 align-items-center">
    
    <div class="col-12 col-xl-10">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

        {{-- HEADER --}}
        <div class="bg-primary bg-gradient p-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center">
            <h2 class="text-white fw-bold mb-1">Meus Materiais 📚</h2>
            <p class="text-white-50 mb-0">
               Gerencie todos os materiais cadastrados
            </p>
        </div><!--fim da card header-->

        {{-- BODY --}}
        <div class="card-body p-4 p-lg-5 bg-white">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Link</th>
                        <th>Ações</th>
                    </tr>
                </thead><!--fim do thead-->
                <tbody>
                    @foreach ($materials as $material)
                        <tr>
                            <td>#{{$material->id}}</td>
                            <td>{{$material->name}}</td>
                            <td>
                                <a href="{{$material->file_url}}" class="btn btn-sm btn-outline-primary rounded-pill px-3"target="_blank">
                                    Baixar
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-secondary">Editar</button>
                                <button class="btn btn-danger">Excluir</button>
                            </td>
                        </tr>
                    @endforeach<!--fim do foreach-->
                </tbody>  <!--fim do tbody-->            
            </table><!--fim da table-->
        </div><!--fim do card body-->

      </div><!--fim do card shadow-->
    </div><!--fim do col-->

  </div><!--fim do row-->
</div><!--fim do container-->

@endsection