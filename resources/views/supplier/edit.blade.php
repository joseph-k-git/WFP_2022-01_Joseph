@extends('layout.conquer')

@section('content')
<div class="container">
    <h2>Form Edit Supplier</h2>
    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-reorder"></i>Ubah Data Supplier
            </div>
            <div class="tools">
                <a href="" class="collapse"></a>
            </div>
        </div>
        <div class="portlet-body form">
            <form role="form" method="POST" action="{{ url('supplier/'.$data->id) }}">
                @csrf
                @method('PUT')
                <div class="form-body">
                    <div class="form-group">
                        <label for="Supplier">Supplier</label>
                        <input value="{{ $data->name }}" type="text" class="form-control" id="" name="name" placeholder="Isikan nama supplier">
                        <span class="help-block">
                        Tulis nama lengkap perusahaan supplier. </span>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" name="address">{{ $data->address }}</textarea>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection