@extends('layouts.panel')

@section('content')
<div class="card shadow">
<div class="card-header border-0">
  <div class="row align-items-center">
    <div class="col">
      <h3 class="mb-0">Médicos</h3>
    </div>
    <div class="col text-right">
      	<a href="{{ url('doctors/create')}}" class="btn btn-sm btn-success">
      		Nuevo médico
  		</a>
    </div>
  </div>
</div>
<div class="card-body">
  @if (session('notification'))
    <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ session('notification')}}
    </div>
  @endif
</div>
<div class="table-responsive">
  <!-- Projects table -->
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">email</th>
        <th scope="col">Cédula</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
    	@foreach ($doctors as $doctor)
      <tr>
        <th scope="row">
          {{ $doctor->name }}
        </th> 
        <th scope="row">
          {{ $doctor->email }}
        </th>
        <th scope="row">
          {{ $doctor->cedula }}
        </th>
        <td>
          <form action="{{ url('doctors/'.$doctor->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
          	<a href="{{ url('/doctors/'.$doctor->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
          	<button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
          </form>
        </td>
      </tr>
      	@endforeach 
    </tbody>
  </table>
</div>
<div class="card-body">
   {{ $doctors->links() }}   
</div>
</div>


@endsection
