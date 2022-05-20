@extends("layout")
@section("content")

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Tambah Data Calon Ketua Himpunan</h1>
  </div>
</div><!--/.row-->

<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-body">
        @if(session("success"))
        <div class="alert bg-success">
          {{ session("success") }}
        </div>
        @endif
        <form action="/tambah-cakahima" method="post">
          {{ csrf_field() }}
        <div class="col-md-12">
          <div class="col-md-12">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" required placeholder="Nama">
            </div>
          </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="ipk">IPK</label>
                <input type="text" class="form-control" name="ipk" id="ipk" required placeholder="ipk">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="sk2pm">Nilai SK2PM</label>
                <input type="text" class="form-control" name="sk2pm" id="sk2pm" required placeholder="sk2pm">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="jml_op">Jumlah Organisasi dan Pelatihan yang Pernah Diikuti</label>
                <input type="text" class="form-control" name="jml_op" id="jml_op" required placeholder="Jumlah Organisasi dan Pelatihan">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="total_ktm">Total KTM yang Terkumpul</label>
                <input type="text" class="form-control" name="total_ktm" id="total_ktm" required placeholder="Total KTM Yang Terkumpul">
              </div>
            </div>
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection