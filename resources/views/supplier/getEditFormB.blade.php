<form>
    <div class="modal-header">
        <button type="button" class="close" 
        data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">EditB Supplier</h4>
    </div>
    <div class="modal-body">
        <div class="form-body">
        <div class="form-group">
            <label for="Supplier">Supplier</label>
            <input value="{{ $data->name }}" type="text" class="form-control" id="eName" name="name" placeholder="Isikan nama supplier">
            <span class="help-block">
            Tulis nama lengkap perusahaan supplier. </span>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" rows="3" id="eAddress" name="address">{{ $data->address }}</textarea>
        </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal" onclick="saveDataUpdateTD({{ $data->id }})">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </form>
</div>
