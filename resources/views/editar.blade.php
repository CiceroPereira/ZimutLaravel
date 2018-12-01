@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="card-body">
                   <form method="post" action="{{url('/editar/'.$dado->id)}}">
                    @csrf
                        <div class="form-group">
                            <label>Nome</label>
                            <input name="name" class="form-control"   value="{{old('name', $dado->name)}}">
                            
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <label>Data de nascimento</label>
                                <input class="form-control" type="date" name="data" value="{{ date('Y-m-d') }}" required="required">
                           </div>

                           <div class="col">
                                <label>CPF</label>
                                <input class="form-control" type="number" step="any" name="cpf" required="required"  value="{{old('cpf', $dado->cpf)}}">
                            </div>
                        </div>    

                        <div class="form-row">
                            <div class="col">
                                <label>CEP</label>
                                <input class="form-control" type="number" step="any" name="cep" required="required"  value="{{old('cep', $dado->cep)}}" id="cep" onblur="pesquisacep(this.value);">
                            </div>

                            <div class="col">
                                <label>Endereço</label>
                                <input class="form-control" type="text" step="any" name="endereco" required="required" id="endereco"  value="{{old('endereco', $dado->endereco)}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">    
                                <label>Número</label>
                                <input class="form-control" type="text" step="any" name="numero" id="numero" required="required"  value="{{old('numero', $dado->numero)}}">
                            </div>

                            <div class="col">
                                <label>Bairro</label>
                                <input class="form-control" type="text" step="any" name="bairro" required="required"  value="{{old('bairro', $dado->bairro)}}">
                            </div>
                        </div>    

                        <div class="form-row">
                            <div class="col">    
                                <label>Cidade</label>
                                <input class="form-control" type="text" step="any" name="cidade" required="required" id="bairro"  value="{{old('cidade', $dado->cidade)}}">
                            </div>

                            <div class="col">
                                <label>Estado</label>
                                <select id="estado" name="estado" required="required" class="form-control"  value="{{old('estado', $dado->estado)}}">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                    <option value="ES">Estrangeiro</option>
                                </select>
                            </div>
                       </div>

                        <div class="form-group">
                            <label>Complemento</label>
                            <input class="form-control" type="text" step="any" name="complemento" id="complemento"  value="{{old('complemento', $dado->complemento)}}">
                        </div>
                    
                         <button class="btn btn-block btn-primary">Salvar</button>

                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

