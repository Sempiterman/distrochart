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
                  <th><b>Folio</b></th>
                  <th><b>ARE</b></th>
                  <th><b>ZORE</b></th>
                  <th><b>Detalles</b></th>
                  <th><b>Status</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach($charters as $charter)
                <tr>
                    <td>{{ $charter->id }}</td>
                    <td>{{ $charter->folio }}</td>
                    <td>{{ $charter->are_id }}</td>
                    <td>{{ $charter->zore_id }}</td>
                    <td>{{ $charter->detalles}}
                    <td>{{ $charter->status }}</td>
                </tr>
                @endforeach
            </tbody>   
        </table>
    </div>
</body>
</html>


