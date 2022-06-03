@extends('layout.conquer')

@section('content')

<h3 class="page-title">
    List of Suppliers <small>daftar semua supplier</small>
</h3>
<div class="page-bar">

    <div class='page-toolbar'>
        <a href="{{ url('suppliers/create') }}" class="btn btn-info">Add Supplier</a>
        <a href="#modalCreate" data-toggle="modal" class="btn btn-info">Add Supplier with Modal</a>
    </div>
  
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @elseif(session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
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
              <input type="submit" value="Hapus" class="btn btn-danger" onclick="if(!confirm('Are you sure want to delete this record {{ $d->name }}?')) return false;">
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" >
      <form role="form" method="POST" action="{{ route('supplier.store') }}">
        @csrf
        <div class="modal-header">
          <button type="button" class="close" 
            data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">Add New Supplier</h4>
        </div>
        <div class="modal-body">
          <div class="form-body">
            <div class="form-group">
              <label for="Supplier">Supplier</label>
              <input type="text" class="form-control" id="" name="name" placeholder="Isikan nama supplier">
              <span class="help-block">
              Tulis nama lengkap perusahaan supplier. </span>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" rows="3" name="address"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
