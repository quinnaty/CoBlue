@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('update-contato', $contato->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">cliente</label>
                <input type="text" name="cliente" class="form-control" value="{{ $contato->cliente }}"></input>
            </div>
            <div class="form-group">
                <label for="">empresa</label>
                <input name="empresa" class="form-control" cols="30" rows="10" value="{{ $contato->empresa }}"></input>
            </div>
            <div class="form-row">
                <div class="form-inline col">
                    <label for="">email</label>
                    <input name="email" class="form-control" value="{{ $contato->email }}" cols="30" rows="10"></input>
                </div>
                <div class="form-inline col">
                    <label for="">telefone</label>
                    <input name="telefone" class="form-control" value="{{ $contato->telefone }}" cols="30" rows="10"></input>
                </div>
            <div>
            <div class="form-group col">
                <label for="">vendedor</label>
                <input name="vendedor" class="form-control" value="{{ $contato->vendedor }}" cols="30" rows="10"></input>
            </div>
            <div class="form-group col">
                <label for="">validade</label>
                <input type="date" name="validade" class="form-control" value="{{ $contato->validade }}" cols="30" rows="10"></input>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection
