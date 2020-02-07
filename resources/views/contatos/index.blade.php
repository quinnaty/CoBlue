@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">
                Contatos
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modalExemplo">
                    Novo Contato
                </button>
            </div>
            <div class="card-body ">
                <table class="table table-striped table-hover table-responsive ">
                  <thead>
                    <tr>
                      <th scope="col" >#</th>
                      <th scope="col" width="250px">Cliente</th>
                      <th scope="col" width="250px">Empresa</th>
                      <th scope="col">Email</th>
                      <th scope="col">Telefone</th>
                      <th scope="col">Validade</th>
                      <th scope="col" width="150px">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($contatos as $contact)
                      <tr>
                          <td>{{ $contact->id }}</td>
                          <td>{{ $contact->cliente }}</td>
                          <td>{{ $contact->empresa }}</td>
                          <td>{{ $contact->email }}</td>
                          <td>{{ $contact->telefone }}</td>
                          <td>{{ $contact->validade }}</td>
                          <td>
                            <a href="{{ route('edit-contato', $contact->id) }}" class="btn btn-outline-primary">
                                <i class="fa fa-edit"></i>
                             </a>
                            <a href="{{ route('delete-contato', $contact->id) }}" class="btn btn-outline-danger">
                                 <i class="fa fa-trash"></i>
                             </a>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('create-contato') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">cliente</label>
                <input type="text" name="cliente" class="form-control"></input>
            </div>
            <div class="form-group">
                <label for="">empresa</label>
                <input name="empresa" class="form-control" cols="30" rows="10"></input>
            </div>
            <div class="form-row">
                <div class="form-inline col">
                    <label for="">email</label>
                    <input name="email" class="form-control" cols="30" rows="10"></input>
                </div>
                <div class="form-inline col">
                    <label for="">telefone</label>
                    <input name="telefone" class="form-control" cols="30" rows="10"></input>
                </div>
            <div>
            <div class="form-group col">
                <label for="">vendedor</label>
                <input name="vendedor" class="form-control" cols="30" rows="10"></input>
            </div>
            <div class="form-group col">
                <label for="">validade</label>
                <input type="date" name="validade" class="form-control" cols="30" rows="10"></input>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-outline-success"><i class="fa fa-check"></i> Cadastrar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
