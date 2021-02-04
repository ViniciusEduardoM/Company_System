@extends('layouts.main', ["current" => "department"])

@section('body')

	<div class="card border">
		<div class="card-header">
			<a href="{{ route('departments.create') }}" class="btn btn-sm btn-primary" role="button" >Adicionar Departamento</a>
		</div>
		<div class="card-body">
			<h5 class="card-title">Departamentos</h5>

			@if(count($departments) > 0)
				<table class="table table-ordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Localização</th>
							<th>Chefe Atual</th>
							<th>Ações</th>
						</tr>	
					</thead>

					<tbody>
						@foreach($departments as $department)
							<tr>
								<td>{{ $department->id }}</td>
								<td>{{ $department->name }}</td>
								<td>{{ $department->location }}</td>
								<td>
									@if(is_null($department->boss))
										Não há chefes cadastrados
									@else
										{{ $department->boss->name }}
									@endif
								</td>
								<td>
									<div class="input-group">

										<form action="{{ route('departments.edit', $department->id) }}" method="GET">
											@csrf
											<button class="btn btn-sm btn-primary mr-2">Editar</button>
										</form>

										<form action="{{ route('departments.destroy', $department->id) }}" method="POST">
											@method('DELETE')
											@csrf
											<button type="submit" class="btn btn-sm btn-danger">Apagar</button>
										</form>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<p class="card-text">Não há itens cadastrados</p>
			@endif
		</div>
	</div>

@endsection