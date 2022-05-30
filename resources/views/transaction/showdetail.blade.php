 <table class='table table-bordered'>
     <tr>
         <th>Nama</th>
         <th>Jumlah</th>
         <th>Harga</th>
         <th>Total</th>
     </tr>
    @foreach($medicines as $m)
    <tr>
        <td>{{ $m->generic_name }}</td>
        <td>{{ $m->pivot->quantity }}</td>
        <td>{{ $m->pivot->price }}</td>
        <td>{{ $m->pivot->quantity * $m->pivot->price }}</td>
    </tr>
    @endforeach
</table>