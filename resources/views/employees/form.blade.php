@extends('layouts.main', ["current" => "employee"])

@section('body')

	<div class="card border">
		<div class="card-body">
			@if(is_null($employee))
				<form action="{{ route('employees.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="name">Nome do Funcionário</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Nome">

						<label for="cpf">CPF</label>
						<input type="text" class="form-control" name="cpf" id="cpf" placeholder="Preço"> 

						<label for="adress">Endereço</label>
						<input type="text" class="form-control" name="address" id="address" placeholder="Endereço">

						<label for="phone">Telefone</label>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Preço">

						<label for="salary">Salário</label>
						<input type="text" class="form-control" name="salary" id="salary" placeholder="Preço">

						<label for="department_id">Departamento em que trabalha</label>
						<select class="form-control" id="department_id" name="department_id">
							<option selected value="">Escolher...</option>
							@foreach($departments as $department)
								<option value="{{ $department->id }}">{{ $department->name }}</option>
							@endforeach
						</select>

						<div class="form-group form-check">
						    <input type="checkbox" class="form-check-input" name="coordinate" id="coordinate" value=1>
						    <label class="form-check-label" for="coordinate">É chefe do departamento</label>
						</div>

					</div>
					<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
					<a href="{{ route('employees.index') }}" class="btn btn-danger btn-sm" role="button">Cancelar</a>
				</form>
			@else
				<form action="{{ route('employees.update', $employee->id) }}" method="POST">
					@method('PUT')
					@csrf
					<div class="form-group">

						<label for="name">Nome do Funcionário</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{ $employee->name }}">

						<label for="cpf">CPF</label>
						<input type="text" class="form-control" name="cpf" id="cpf" placeholder="Preço" value="{{ $employee->cpf }}">

						<label for="adress">Endereço</label>
						<input type="text" class="form-control" name="adress" id="adress" placeholder="Endereço" value="{{ $employee->address }}">

						<label for="phone">Telefone</label>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Preço" value="{{ $employee->phone }}">

						<label for="salary">Salário</label>
						<input type="text" class="form-control" name="salary" id="salary" placeholder="Preço" value="{{ $employee->salary }}">

						<label for="department_id">Departamento em que trabalha</label>
						<select class="form-control" id="department_id" name="department_id">
							@if(is_null($employee->workAt)) 
								<option selected value="">Escolher...</option>
								@foreach($departments as $department)
									<option value="{{ $department->id }}">{{ $department->name }}</option>
								@endforeach
							@else
								@foreach($departments as $department)
									<option value="{{ $department->id }}" @if($employee->workAt->id == $department->id) selected @endif>{{ $department->name }}</option>
								@endforeach
							@endif
						</select>

						<div class="form-group form-check">
						    <input type="checkbox" class="form-check-input" name="coordinate" id="coordinate" @if($coordinate) checked @endif value=1>
						    <label class="form-check-label" for="coordinate">É chefe do departamento</label>
						  </div>
					</div>

					<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
					<a href="{{ route('employees.index') }}" class="btn btn-danger btn-sm" role="button">Cancelar</a>
				</form>
			@endif
				
		</div>
	</div>

@endsection