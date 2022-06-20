 @extends('layouts.frontend')

@section('title', 'Cart')

@section('content')

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        <?php
            $jumlah = 0;
            $total = 0;
        ?>
        @foreach($medicines as $m)
        <?php
            $quantity = $m->pivot->quantity;
            $jumlah += $quantity;
            $total += $quantity * $m->pivot->price;
        ?>
        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img height="50px" src="{{ asset('images/'.$m->image) }}" alt="..." class="img-responsive"/></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{ $m->generic_name }}</h4>
                    </div>
                </div>
            </td>
            <td data-th="Price">Rp{{ $m->pivot->price }}</td>
            <td data-th="Quantity">
                {{ $quantity }}
            </td>
            <td data-th="Subtotal" class="text-center">{{ $quantity * $m->pivot->price }}</td>
            <td class="actions" data-th="">
                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td colspan="3" style="align:right;">Total:</td>
            <td class="text-center"><strong>Rp{{ number_format($total, 0, ',', '.') }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/home') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
        </tr>
        </tfoot>
    </table>

@endsection
