@extends('layouts.main', ["current" => "department"])

@section('body')

	<div class="card border">
		<div class="card-body">
			@if(is_null($department))
				<form action="{{ route('departments.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="name">Nome do Departamento</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Nome">
						<label for="location">Localização</label>
						<input type="text" class="form-control" name="location" id="location" placeholder="Localização">
						<input type="hidden" name="employee_id" value="">
					</div>
					<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
					<a href="{{ route('departments.index') }}" class="btn btn-danger btn-sm" role="button">Cancelar</a>
				</form>
			@else
				<form action="{{ route('departments.update', $department->id) }}" method="POST">
					@method('PUT')
					@csrf
					<div class="form-group">
						<label for="name">Nome da Departamento</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="{{ $department->name }}">
						<label for="location">Localização</label>
						<input type="text" class="form-control" name="location" id="location" placeholder="Localização" value="{{ $department->location }}">
						<label for="workers">Chefe Atual</label>
						<select class="form-control" id="workers" name="employee_id">
							@if(is_null($department->boss)) 
								<option selected value="">Escolher...</option>
								@foreach($employees as $employee)
									<option value="{{ $employee->id }}">{{ $employee->name }}</option>
								@endforeach
							@else
								@foreach($employees as $employee)
									<option value="{{ $employee->id }}" @if($department->boss->id == $employee->id) selected @endif>{{ $employee->name }}</option>
								@endforeach
							@endif
						</select>
					</div>

					<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
					<a href="{{ route('departments.index') }}" class="btn btn-danger btn-sm" role="button">Cancelar</a>
				</form>
			@endif
				
		</div>
	</div>

@endsection