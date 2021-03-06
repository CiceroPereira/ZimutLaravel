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
                   <form method="post" action="{{url('/inserir')}}">
                    @csrf
                        <div class="form-group">
                            <label>Nome</label>
                            <input name="name" class="form-control">
                            
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <label>Data de nascimento</label>
                                <input class="form-control" type="date" name="data" value="{{ date('Y-m-d') }}" required="required">
                           </div>

                           <div class="col">
                                <label>CPF</label>
                                <input class="form-control" type="number" step="any" name="cpf" required="required">
                            </div>
                        </div>    

                        <div class="form-row">
                            <div class="col">
                                <label>CEP</label>
                                <input class="form-control" type="text" step="any" name="cep" id="cep" required="required" onblur="pesquisacep(this.value);">
                            </div>

                            <div class="col">
                                <label>Endereço</label>
                                <input class="form-control" type="text" step="any" name="endereco" id="endereco" required="required">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">    
                                <label>Número</label>
                                <input class="form-control" type="text" step="any" name="numero" id="numero" required="required">
                            </div>

                            <div class="col">
                                <label>Bairro</label>
                                <input class="form-control" type="text" step="any" name="bairro" id="bairro" required="required">
                            </div>
                        </div>    

                        <div class="form-row">
                            <div class="col">    
                                <label>Cidade</label>
                                <input class="form-control" type="text" step="any" name="cidade" id="cidade" required="required">
                            </div>

                            <div class="col">
                               <label>Estado</label>
                                <select id="estado" name="estado" id="estado" class="form-control" required="required">
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
                            <input class="form-control" type="text" step="any" name="complemento">
                        </div>
                    
                         <button class="btn btn-block btn-primary">Salvar</button>

                   </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

