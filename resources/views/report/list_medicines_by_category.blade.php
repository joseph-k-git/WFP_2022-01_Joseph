<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List Medicines by Category</h2>
  <p>ID Category: {{ $id_category }} with name: {{ $name_category }}</p>
  <hr>
  <p>Total rows: {{ $getTotalData }}</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Generic Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Foto</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($result as $medicine)
      <tr>
        <td>{{ $medicine->generic_name }}</td>
        <td>{{ $medicine->form }}</td>
        <td>{{ $medicine->restriction_formula }}</td>
        <td><img src="{{ asset('/images/'.$medicine->image) }}" height="100px"/></td>
        <td>{{ $medicine->price }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
