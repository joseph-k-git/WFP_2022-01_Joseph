<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Daftar Obat</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Data</th>
        <th>Isi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nama</td>
        <td>{{ $medicine->generic_name }}</td>
      </tr>
      <tr>
        <td>Bentuk</td>
        <td>{{ $medicine->form }}</td>
      </tr>
      <tr>
        <td>Restriction</td>
        <td>{{ $medicine->restriction_formula }}</td>
      </tr>
      <tr>
        <td>Foto</td>
        <td><img src="{{ asset('/images/'.$medicine->image) }}" height="300px"/></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>{{ $medicine->price }}</td>
      </tr>
      <tr>
        <td>Kategori</td>
        <td><a href="/category/{{ $medicine->category->id }}">{{ $medicine->category->name }}</a></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
