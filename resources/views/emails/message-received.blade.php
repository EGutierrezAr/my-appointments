<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Confirmación de cita</title>
</head>
<body>
    <p style="color:#1a2029;" >Hola <b>{{ $userName }}</b> </p>
    <p style="color:#1a2029;" >El motivo del correo es para informate que tu cita ha sido <b>CONFIRMADA</b> </p>
    <ul style="color:#212834;">
    	<li>Doctor: {{ $doctorName }}</li>
        <li>Tipo de cita: {{ $appointment->type }}</li>
        <li>Fecha de la cita: {{ $appointment->scheduled_date }}</li>
        <li>Hora de la cita: {{ $appointment->scheduled_time }}</li>
        <li>Descripción: {{ $appointment->description }}</li>
    </ul>
    <p>No faltes.</p>
</body>
</html>