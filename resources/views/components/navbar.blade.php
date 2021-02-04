<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">

      <li @if($current == 'home') class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="{{ route('index') }}">Home </a>
      </li>

      <li @if($current == 'department') class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="{{ route('departments.index') }}">Departamentos </a>
      </li>

      <li @if($current == 'dependant') class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="{{ route('dependants.index') }}">Dependentes </a>
      </li>

      <li @if($current == 'employee') class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="{{ route('employees.index') }}">Funcionários </a>
      </li>

    </ul>
  </div>
</nav>