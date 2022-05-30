@extends('layout.conquer')

@section('content')

<h3 class="page-title">
    List of Suppliers <small>daftar semua supplier</small>
</h3>
<div class="page-bar">
  
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Supplier</a>
            <i class="fa fa-angle-right"></i>
        </li>
    </ul>
    <div class="page-toolbar">
        <!-- tempat action button -->
    </div>
</div>

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>
            <a href="{{ route('supplier.create') }}" class="btn btn-info">Tambah</a>
        </th>
      </tr>
    </thead>
    <tbody>
    @foreach($result as $d)
      <tr>
        <td>{{ $d->name }}</td>
        <td>{{ $d->address }}</td>
        <td>
            <a href="#" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
