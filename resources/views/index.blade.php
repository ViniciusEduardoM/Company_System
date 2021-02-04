@extends('layouts.main', ["current" => "home"])

@section('body')

	<div class="jumbotron bg-light border borde-secondary">
		<div class="row">
			<div class="card-deck">
				
				<div class="card border border-primary mb-2">
					<div class="card-body">
						<h5 class="card-title">Cadastro de Departamentos</h5>
						<p class="card-text">
							Aqui você cadastra os seus departamentos.
						</p>
						<a href="{{ route('departments.create') }}" class="btn btn-primary">Cadastre seus Departamentos</a>
					</div>
				</div>
				
				<div class="card border border-primary mb-2">
					<div class="card-body">
						<h5 class="card-title">Cadastro de Dependentes</h5>
						<p class="card-text">
							Aqui você cadastra seus dependentes.
						</p>
						<a href="{{ route('dependants.create') }}" class="btn btn-primary">Cadastre seus Dependentes</a>
					</div>
				</div>

				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title">Cadastro de Funcionários</h5>
						<p class="card-text">
							Aqui você cadastra seus funcionários.
						</p>
						<a href="{{ route('employees.create') }}" class="btn btn-primary">Cadastre seus Funcionários</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>

@endsection
