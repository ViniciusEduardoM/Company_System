@extends('layouts.main', ["current" => "dependant"])

@section('body')

	<div class="card border">
		@if(!is_null($dependant))
		<div class="card-header">
			<a href="{{ route('dependants.edit', $dependant->id) }}" class="btn btn-sm btn-primary" role="button" >Editar Dependente</a>
			<a href="{{ route('dependants.index') }}" class="btn btn-sm btn-info" role="button" >Voltar </a>
		</div>
		<div class="card-body">
			<h5 class="card-title">Dependente</h5>
			
			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>ID</b></h5>
					</div>
					<p class="mb-1">{{ $dependant->id }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Nome</b></h5>
					</div>
					<p class="mb-1">{{ $dependant->name }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Endereço</b></h5>
					</div>
					<p class="mb-1">{{ $dependant->address }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Funcionário Responsável</b></h5>
					</div>
					<p class="mb-1">{{ $parents }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Adicionando em</b></h5>
					</div>
					<p class="mb-1">{{ $dependant->created_at }}</p>
				</div>
			</div>

			<div class="list-group">
				<div class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><b>Última atualização do Cadastro</b></h5>
					</div>
					<p class="mb-1">{{ $dependant->updated_at }}</p>
				</div>
			</div>

		</div>
		@else
			<div class="card text-white bg-danger" >
				<div class="card-header">Erro!</div>
				<div class="card-body">
					<h5 class="card-title">Houve algum erro no App!</h5>
					<p class="card-text">Não há Dependente válido. Favor contatar o suporte técnico.</p>
				</div>
			</div>			
		@endif
	</div>

@endsection