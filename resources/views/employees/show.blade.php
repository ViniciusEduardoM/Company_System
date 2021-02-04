@extends('layouts.main', ["current" => "employee"])

@section('body')

	<div class="card border">
		@if(!is_null($employee))
		<div class="card-header">
			<a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-primary" role="button" >Editar  Funcionário</a>
			<a href="{{ route('employees.index') }}" class="btn btn-sm btn-info" role="button" >Voltar </a>
		</div>
		<div class="card-body">
			<h5 class="card-title">Funcionário</h5>
			
			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>ID</b></h5>
					</div>
					<p class="mb-1">{{ $employee->id }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Nome</b></h5>
					</div>
					<p class="mb-1">{{ $employee->name }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>CPF</b></h5>
					</div>
					<p class="mb-1">{{ $employee->cpf }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Endereço</b></h5>
					</div>
					<p class="mb-1">{{ $employee->address }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Telefone</b></h5>
					</div>
					<p class="mb-1">{{ $employee->phone }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Telefone</b></h5>
					</div>
					<p class="mb-1">{{ $employee->salary }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Departamento em que Trabalha</b></h5>
					</div>
					<p class="mb-1">{{ $workAt }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>É chefe do departamento?</b></h5>
					</div>
					<p class="mb-1">{{ $coordinate }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Dependentes</b></h5>
					</div>
					@if(count($dependants) <= 0)
						<p class="mb-1">Não possui nenhum dependente cadastrado</p>
					@else
						@foreach($dependants as $dependant)
							<p class="mb-1">{{ $dependant->name }}</p>
						@endforeach
					@endif
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Adicionando em</b></h5>
					</div>
					<p class="mb-1">{{ $employee->created_at }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Última atualização do Cadastro</b></h5>
					</div>
					<p class="mb-1">{{ $employee->updated_at }}</p>
				</div>
			</div>

		</div>
		@else
			<div class="card text-white bg-danger" >
				<div class="card-header">Erro!</div>
				<div class="card-body">
					<h5 class="card-title">Houve algum erro no App!</h5>
					<p class="card-text">Não há Funcionário válido. Favor contatar o suporte técnico.</p>
				</div>
			</div>			
		@endif
	</div>

@endsection