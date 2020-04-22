<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th scope="col">Descripción</th>
        <th scope="col">Especialidad</th>
        @if ($role == 'patient')
          <th scope="col">Doctor</th>
        @elseif ($role == 'doctor')
          <th scope="col">Paciente</th>
        @endif
        <th scope="col">Fecha</th>
        <th scope="col">Hora</th>
        <th scope="col">Tipo</th> 
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($confirmedAppointments as $appointment)
      <tr>
        <th scope="row">
          {{ $appointment->description }}
        </th> 
        <td scope="row">
          {{ $appointment->specialty->name }}
        </td>
        @if ($role == 'patient')
        <td scope="row">
          {{ $appointment->doctor->name }}
        </td>
        @elseif ($role == 'doctor')
        <td scope="row">
          {{ $appointment->patient->name }}
        </td>
        @endif
         <td scope="row">
          {{ $appointment->scheduled_date }}
        </td>
        <td scope="row">
          {{ $appointment->scheduled_time_12 }}
        </td>
        <td scope="row">
          {{ $appointment->type }}
        </td>
        <td>
        @if ($role == 'admin')
        <a class="btn btn-sm btn-primary" title="Ver cita" 
          href="{{ url('/appointments/'.$appointment->id) }}">
          Ver
        </a> 
        @endif 
        <a class="btn btn-sm btn-danger" title="Cancelar cita" 
          href="{{ url('/appointments/'.$appointment->id.'/cancel') }}">
          Cancelar
        </a>        
        </td>
      </tr>
        @endforeach 
    </tbody>
  </table>
</div>

<div class="card-body">
  {{ $confirmedAppointments->links() }} 
</div>
