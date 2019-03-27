<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>PDF</title>
   <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
/*
th {
  background-color: black;
  color: white;
}*/
th { font-family: Arial, sans-serif;
   font-size: 10px;
   font-style: normal;
   font-variant: normal;
   font-weight: 100;
   line-height: 20px;
   background-color: black;
     color: white;
  } 
td { font-family: Arial, "Helvetica Neue", Helvetica,
   sans-serif; font-size: 10px;
   /*font-style: normal;
   font-variant: normal;*/
   /*font-weight: 700;*/
   line-height: 15px; } 
</style>
</head>
<body>
  <h1>Acuse de entrega de dispositivo movil de la 06 junta distrital 06</h1><h3 align="right"><td>{{ $movil->folio }}</td></h3>
  <br>
  <p>El siguiente documento acredita al C.{{ $movil->employ->name }} {{ $movil->employ->apellidop }} {{ $movil->employ->appellidom }} con numero de empleado {{ $movil->employ->numempleado }} el cual desarrollo un rol deontro del Instituto Nacional Electoral con sede en la heroica Ciudad de Tlaxiaco </p>
  <div class="panel-body">

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th><b>No#</b></th>
                  <th><b>Folio</b></th>
                  <th><b>Nombre</b></th>
                  <th><b>No. Empleado</b></th>
                  <th><b>Audifonos</b></th>
                  <th><b>Cargador</b></th>
                  <th><b>Cable USB</b></th>
                  <th><b>Estado</b></th>
                  <th><b>Bateria</b></th>
                  <th><b>Chip</b></th>
                  <th><b>Display</b></th>
                  <th><b>detalles</b></th>
                  <th><b>Status</b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $movil->id }}</td>
                    <td>{{ $movil->folio }}</td>
                    <td>{{ $movil->employ->name }}</td><td>{{ $movil->employ->apellidop }}</td><td>{{ $movil->employ->appellidom }}</td>
                    <td>{{ $movil->employ->numempleado }}</td>
                    <td>{{ $movil->audifonos }}</td>
                    <td>{{ $movil->cargador }}</td>
                    <td>{{ $movil->cable}}
                    <td>{{ $movil->estado }}</td>
                    <td>{{ $movil->bateria }}</td>
                    <td>{{ $movil->chip }}</td>
                    <td>{{ $movil->dysplay }}</td>
                    <td>{{ $movil->detalles }}</td>
                    <td>{{ $movil->status }}</td>
                </tr>
            </tbody>   
        </table>
    </div>
    <div>
      
    </div>
</body>
</html>


