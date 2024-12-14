<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Transaksi</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Categories</h3>
  <table class="table-data">
    <thead>
      <tr>
        <th>ID</th>
        <th>Menu</th>
        <th scope="col" style="width: 30%">Description</th>
         <th scope="col" style="width: 15%">Price</th>
         <th scope="col" style="width: 20%">Stock</th>
      </tr>
    </thead>
    @foreach ($products as $pt)
                        <tbody>
                            <td> {{$pt->id}} </td>
                            <td> {{$pt->name}} </td>
                            <td> {{$pt->description}} </td>
                            <td> {{$pt->price}} </td>
                            <td> {{$pt->stock}} </td>
                          
                        </tbody>
                        @endforeach
</body>

</html>
