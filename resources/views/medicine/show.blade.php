@extends('layout.conquer')

@section('content')
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
@endsection
