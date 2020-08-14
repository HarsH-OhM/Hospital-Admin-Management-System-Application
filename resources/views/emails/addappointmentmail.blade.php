
<h1>Your appointment is approved.</h1>
<div>
    <h3>your appointment details</h3>
    <p>PatientId:{{ $request->pid }}</p>
    <p>AppointmentId:{{ $request->aid }}</p>
    <p>Patient Name:{{ $request->pname }}</p>
    <p>Doctor:{{ $request->dname }}</p>
    <p>Appointment Date:{{ $request->date }}</p>
    <p>Appointment time:{{ $request->time }}</p>
    <p>Patient Status:{{ $request->atype }}</p>

    
</div>

<h3>Sent via @SunayanEyeCare</h3>