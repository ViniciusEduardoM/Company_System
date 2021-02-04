@extends('layouts.main', ["current" => "dependant"])

@section('body')

	<div class="card border">
		<div class="card-body">
			@if(is_null($dependant))
				<form action="{{ route('dependants.store') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="name">Nome do Dependente</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Nome">

						<label for="adress">Endereço</label>
						<input type="text" class="form-control" name="address" id="address" placeholder="Endereço">

						<label for="adress">Perentesco</label>
						<input type="text" class="form-control" name="kinship" id="kinship" placeholder="Parentesco">

						<label for="employee_id">Funcionário Responsável</label>
						<select class="form-control" id="employee_id" name="employee_id">
							<option selected value="">Escolher...</option>
							@foreach($employees as $employee)
								<option value="{{ $employee->id }}">{{ $employee->name }}</option>
							@endforeach
						</select>

					</div>
					<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
					<a href="{{ route('dependants.index') }}" class="btn btn-danger btn-sm" role="button">Cancelar</a>
				</form>
			@else
				<form action="{{ route('dependants.update', $dependant->id) }}" method="POST">
					@method('PUT')
					@csrf
					<div class="form-group">

						<label for="name">Nome do Dependente</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Nome">

						<label for="adress">Endereço</label>
						<input type="text" class="form-control" name="address" id="address" placeholder="Endereço">

						<label for="adress">Perentesco</label>
						<input type="text" class="form-control" name="kinship" id="kinship" placeholder="Parentesco">

						<label for="employee_id">Funcionário Responsável</label>
						<select class="form-control" id="employee_id" name="employee_id">

							@if(is_null($dependant->parents)) 
								<option selected value="">Escolher...</option>
								@foreach($employees as $employee)
									<option value="{{ $employee->id }}">{{ $employee->name }}</option>
								@endforeach
							@else
								@foreach($employees as $employee)
									<option value="{{ $employee->id }}" @if($dependant->parents->id == $employee->id) selected @endif>{{ $employee->name }}</option>
								@endforeach
							@endif
						</select>

					</div>

					<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
					<a href="{{ route('dependants.index') }}" class="btn btn-danger btn-sm" role="button">Cancelar</a>
				</form>
			@endif
				
		</div>
	</div>

@endsection