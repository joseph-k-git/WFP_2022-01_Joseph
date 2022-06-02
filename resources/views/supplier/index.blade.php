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
            <a href="{{ url('/supplier/'.$d->id.'/edit') }}" class="btn btn-warning">Edit</a>
            <form method="POST" action="{{ url('/supplier/'.$d->id) }}">
              @csrf
              @method('DELETE')
              <input type="submit" value="Hapus" class="btn btn-danger">
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
