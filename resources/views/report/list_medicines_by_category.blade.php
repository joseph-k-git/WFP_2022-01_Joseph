<div class="modal-header">
  <h2>List Medicines by Category</h2>
  <p>ID Category: {{ $id_category }} with name: {{ $name_category }}</p>
  <hr>
  <p>Total rows: {{ $getTotalData }}</p>
</div>
<div class="modal-body">
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
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">
    Close
  </button>
</div>
