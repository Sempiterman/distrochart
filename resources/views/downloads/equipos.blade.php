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
	<div class="panel-body">

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th><b>No#</b></th>
                  <th><b>Folio</b></th>
                  <th><b>No. Empleado</b></th>
                  <th><b>Chaleco</b></th>
                  <th><b>Mochila</b></th>
                  <th><b>Gafetes</b></th>
                  <th><b>Rotafolio</b></th>
                  <th><b>Manuales</b></th>
                  <th><b>Sombrero</b></th>
                  <th><b>Portahojas</b></th>
                  <th><b>Utileria</b></th>
                  <th><b>Detalles</b></th>
                  <th><b>Status</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach($kits as $kit)
                <tr>
                    <td>{{ $kit->id }}</td>
                    <td>{{ $kit->folio }}</td>
                    <td>{{ $kit->employ->numempleado }}</td>
                    <td>{{ $kit->chaleco }}</td>
                    <td>{{ $kit->mochila }}</td>
                    <td>{{ $kit->gafete}}
                    <td>{{ $kit->rotafolio }}</td>
                    <td>{{ $kit->manuales }}</td>
                    <td>{{ $kit->sombrero }}</td>
                    <td>{{ $kit->portahojas }}</td>
                    <td>{{ $kit->utileria }}</td>
                    <td>{{ $kit->detalles }}</td>
                    <td>{{ $kit->status }}</td>
                </tr>
                @endforeach
            </tbody>   
        </table>
    </div>
</body>
</html>


