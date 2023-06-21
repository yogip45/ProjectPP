<div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="forms-sample" method="POST" action="/insertuser" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="nama pengguna" name="name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" id="email" placeholder="email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" placeholder="password" name="password">
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="level">
              <option value="owner">Owner</option>
              <option value="kasir">Kasir</option>
            </select>
          </div>
          

          {{-- <div class="form-group">
            <label for="gambar">Gambar Menu</label>
            <input type="file" class="form-control" id="harga" name="gambar">
          </div> --}}
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
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          {{-- <button class="btn btn-light">Cancel</button> --}}
        </form>
      </div>
      <div class="modal-footer">        
      </div>
    </div>
  </div>
</div>