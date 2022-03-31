@extends('layout.conquer')

@section('content')
<!-- BEGIN Portlet PORTLET-->
<div class="portlet">
  <div class="portlet-title">
    <div class="caption">
      <i class="fa fa-reorder"></i>Daftar Kategori
    </div>
  </div>
  <div class="portlet-body">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
          <td><a href="/category/{{ $category->id }}">{{ $category->name }}</a></td>
          <td>{{ $category->description }}</td>
        </tr>
        <tr>
          <td colspan=4>
          @foreach ($category->medicines as $medicine)
            <div class="col-md-3" style="text-align:center; border:1px solid #999; border-radius:10px; margin:10px; padding:10px;">
              <img src="{{ asset('/images/'.$medicine->image) }}" height="120px"/><br>
              <b>{{ $medicine->generic_name }}</b><br>
              {{ $medicine->form }}
            </div>
          @endforeach
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- END Portlet PORTLET-->
@endsection
