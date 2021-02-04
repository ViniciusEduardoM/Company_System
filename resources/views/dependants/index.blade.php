@extends('layouts.main', ["current" => "dependant"])

@section('body')

	<div class="card border">
		<div class="card-header">
			<a href="{{ route('dependants.create') }}" class="btn btn-sm btn-primary" role="button" >Adicionar Dependente</a>
		</div>
		<div class="card-body">
			<h5 class="card-title">Dependentes</h5>

			@if(count($dependants) > 0)
				<table class="table table-ordered table-hover">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nome</th>
							<th>Endereço</th>
							<th>Parentesco</th>
							<th>Funcionário</th>
						</tr>	
					</thead>

					<tbody>
						@foreach($dependants as $dependant)
							<tr>
								<td>{{ $dependant->id }}</td>
								<td>{{ $dependant->name }}</td>
								<td>{{ $dependant->address }}</td>
								<td>{{ $dependant->kinship }} </td>
								<td>
									@if(is_null($dependant->parents))
									Sem Funcionário cadastrado
									@else
										{{$dependant->parents->name}}
									@endif
								</td>
								<td>
									<div class="input-group">
										<form action="{{ route('dependants.edit', $dependant->id) }}" method="GET">
											@csrf
											<button class="btn btn-sm btn-primary mr-2">Editar</button>
										</form>

										<form action="{{ route('dependants.show', $dependant->id) }}"method="GET">
											@csrf
											<button class="btn btn-sm btn-success">Visualizar</button>
										</form>

										<form action="{{ route('dependants.destroy', $dependant->id) }}" method="POST">
											@method('DELETE')
											@csrf
											<button type="submit" class="btn btn-sm btn-danger">Apagar
											</button>

										</form>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<p class="card-text">Não existem funcionários cadastrados</p>
			@endif
		</div>
	</div>

@endsection