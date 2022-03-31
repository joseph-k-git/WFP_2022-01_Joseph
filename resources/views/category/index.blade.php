@extends('layout.conquer')

@section('content')
<div class="container">
  <h2>Apotek Joseph</h2>
  <p>Categories</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Description</th>
        <th>Medicines</th>
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
@endsection
