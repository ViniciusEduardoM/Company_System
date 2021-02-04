@extends('layouts.main', ["current" => "employee"])

@section('body')

	<div class="card border">
		<div class="card-header">
			<a href="{{ route('employees.create') }}" class="btn btn-sm btn-primary" role="button" >Adicionar Funcionário</a>
		</div>
		<div class="card-body">
			<h5 class="card-title">Funcionários</h5>

			@if(count($employees) > 0)
				<table class="table table-ordered table-hover">
					<thead>
						<tr>
							<th>Código</th>
							<th>Nome</th>
							<th>Telefone</th>
							<th>Department</th>
							<th>Ações</th>
						</tr>	
					</thead>

					<tbody>
						@foreach($employees as $employee)
							<tr>
								<td>{{ $employee->id }}</td>
								<td>{{ $employee->name }}</td>
								<td>{{ $employee->phone }}</td>
								<td>
									@if(is_null($employee->workAt))
									Sem departamento cadastrados
									@else
										{{$employee->workAt->name}}
									@endif
								</td>
								<td>
									<div class="input-group">
										<form action="{{ route('employees.edit', $employee->id) }}" method="GET">
											@csrf
											<button class="btn btn-sm btn-primary mr-2">Editar</button>
										</form>

										<form action="{{ route('employees.show', $employee->id) }}"method="GET">
											@csrf
											<button class="btn btn-sm btn-success">Visualizar</button>
										</form>

										<form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
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