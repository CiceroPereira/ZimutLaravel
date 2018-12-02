@extends('layouts.app')

@section('content')
<div class="container">
		<div class="table-responsive">
			<div class="row" style="padding: 4px">
				
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Data de Nascimento</th>
						<th>CPF</th>
						<th>CEP</th>
						<th>Endereço</th>
						<th>Número</th>
						<th>Bairo</th>
						<th>Cidade</th>
						<th>Estado</th>
						<th>Complemento</th>
						<th colspan="2">Ações</th>
					</tr>
				</thead>
				<tbody>
				@foreach($all as $dados)
					<tr>
						
						<td>{{$dados->name}}</td>
						<td>{{$dados->data}}</td>
						<td>{{$dados->cpf}}</td>
						<td>{{$dados->cep}}</td>
						<td>{{$dados->endereco}}</td>
						<td>{{$dados->numero}}</td>
						<td>{{$dados->bairro}}</td>
						<td>{{$dados->cidade}}</td>
						<td>{{$dados->estado}}</td>
						<td>{{$dados->complemento}}</td>

	
						<td style="text-align: center;">
							<a href="{{url('/editar', $dados->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
						</td>
						<td style="text-align: center">
							<form onsubmit="return confirm('Deseja mesmo deletar o registro(não poderá ser desfeito)?');" action="{{ url('/listar/delete' , $dados->id ) }}" method="POST">
	    						{{ csrf_field() }}
	    						{{ method_field('DELETE') }}
	    						<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
							</form>
						</td>
						
					</tr>
				@endforeach	
				</tbody>
			</table>
			
			{{ $all->links() }}

		</div>
	</div>
@endsection