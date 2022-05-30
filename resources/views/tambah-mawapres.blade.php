@extends("layout")
@section("content")

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Tambah Data Calon Mahasiswa Berprestasi (MAWAPRES)</h1>
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
        <form action="/tambah-mawapres" method="post">
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
                <label for="prestasi">Prestasi</label>
                <input type="text" class="form-control" name="prestasi" id="prestasi" required placeholder="Prestasi">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nilai_karya_tulis">Nilai Karya Tulis</label>
                <input type="text" class="form-control" name="nilai_karya_tulis" id="nilai_karya_tulis" required placeholder="Nilai Karya Tulis">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="toefl">Nilai Toefl</label>
                <input type="text" class="form-control" name="toefl" id="toefl" required placeholder="Nilai Toefl">
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