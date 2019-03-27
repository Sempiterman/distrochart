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
   font-size: 15px;
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
                  <th><b>IMEI</b></th>
                  <th><b>Marca</b></th>
                  <th><b>Numero de chip</b></th>
                  <th><b>Compania</b></th>
                  <th><b>Observaciones</b></th>
                  <th><b>Status</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach($devices as $device)
                <tr>
                    <td>{{ $device->id }}</td>
                    <td>{{ $device->imei }}</td>
                    <td>{{ $device->marca }}</td>
                    <td>{{ $device->numtelchip }}</td>
                    <td>{{ $device->compania }}
                    <td>{{ $device->observaciones }}</td>
                    <td>{{ $device->status }}</td>
                </tr>
                @endforeach
            </tbody>   
        </table>
    </div>
</body>
</html>


