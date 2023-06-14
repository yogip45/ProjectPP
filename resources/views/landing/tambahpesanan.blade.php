<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Ke Keranjang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="forms-sample" method="POST" action="/insertmenu" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Nama Menu</label>
            <input type="text" class="form-control" id="nama_menu" placeholder="nama menu" name="nama_menu">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jumlah </label>
            <input type="text" class="form-control" id="harga" placeholder="harga" name="jumlah" value="0">
          </div>
          <div class="form-group">
            <label for="nomor_meja">Nomor Meja </label>
            <select class="form-control mb-2" name="nomor_meja" id="nomor_meja" required>
              <option value="">Pilih Nomor Meja</option>
              <option value="">A1</option>
              <option value="">A2</option>
              <option value="">A3</option>
              <option value="">A4</option>
              <option value="">A5</option>
              {{-- @foreach ($mejas as $nomorMeja)
                <option value="{{ $nomorMeja }}">{{ $nomorMeja }}</option>
            @endforeach --}}
          </select>
        </div>
          {{-- <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="gambar">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>                --}}
          <button type="submit" class="btn btn-primary mr-2">Tambah</button>
          {{-- <button class="btn btn-light">Cancel</button> --}}
        </form>
      </div>
      <div class="modal-footer">        
      </div>
    </div>
  </div>
</div>