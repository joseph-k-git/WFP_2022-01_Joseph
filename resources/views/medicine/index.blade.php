@extends('layout.conquer')

@section('content')

<h3 class="page-title">
    Daftar Obat <small>daftar semua bbat yang ada di apotik ini</small>
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Medicine</a>
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
        <th>Form</th>
        <th>Restriction</th>
        <th>Kategori</th>
        <th>Foto</th>
        <th>Harga</th>
        <th>Detail</th>
      </tr>
    </thead>
    <tbody>
    @foreach($result as $d)
      <tr>
        <td><a href="/medicine/{{ $d->id }}" target="_blank"><b>{{ $d->generic_name }}</b></a></td>
        <td>{{ $d->form }}</td>
        <td>{{ $d->restriction_formula }}</td>
        <td>{{ $d->category->name }}</td>
        <td>
          <a href="#detail_{{$d->id}}" data-toggle="modal">
            <img src="{{ asset('/images/'.$d->image) }}" height="100px"/>
          </a>
        </td>
        <td>{{ $d->price }}</td>
        <td>
          <a class='btn btn-info' href="{{ route('medicine.show', $d->id) }}" data-target="#show{{$d->id}}" data-toggle='modal'>
            Detail
          </a>
        </td>
      </tr>

      <div class="modal fade" id="detail_{{$d->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{$d->generic_name}}</h4>
            </div>
            <div class="modal-body">
              <img src="{{ asset('/images/'.$d->image) }}" height="400px"><br>
              <b>Description:</b><br>
              {{ $d->restriction_formula }}
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="show{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- put animated gif here -->
          </div>
        </div>
      </div>
    </td>

    @endforeach
    </tbody>
  </table>
</div>

<div class="container">
  <h2>Apotek Joseph</h2>
  <div class="row">
  @foreach ($result as $d)
    <div class="col-md-3" style="text-align:center; border:1px solid #999; border-radius:10px; margin:10px; padding:10px;">
      <img src="{{ asset('/images/'.$d->image) }}" height="120px"/><br>
      <a href="/medicine/{{ $d->id }}" target="_blank"><b>{{ $d->generic_name }}</b></a><br>
      {{ $d->form }}
    </div>
  @endforeach
  </div>
</div>

@endsection
