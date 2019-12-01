@extends('layouts.admin')

@section('content')

<section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="/admin/update" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">  
                    <div class="input-group">   
                        <input name="id" type="hidden" class="form-control" placeholder="Nomor" value="{{$data->id}}">      
                    </div>
                </div>
                <div class="form-group">
                  <label>Judul</label>
                  <input name="judul" type="text" class="form-control" placeholder="Judul" value="{{$data->judul}}">
                </div>
                <div class="form-group">
                  <label>Sub Judul</label>
                  <input name="subjudul" type="text" class="form-control" placeholder="Sub Judul" value="{{$data->subjudul}}">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Isi Berita</label>
                  <textarea name="isi" class="form-control" rows="3" placeholder="Isi Berita" >{{$data->isi}}</textarea>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-warning">Edit</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
@endsection