@extends('layouts.admin')

@section('content')

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <a href="admin/create" class="btn btn-success btn-sm fa fa-plus pull-right"></a>
            </div>
            <!-- /.box-header --> 
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Sub Judul</th>
                  <th>Isi</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @if($data)
                  @php $no = 1; @endphp
                  @foreach($data as $datas)

                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$datas->judul}}</td>
                      <td>{{$datas->subjudul}}</td>
                      <td>{{$datas->isi}}</td>
                      <td class="text-center"> 
                        <a href="admin/{{$datas->id}}/edit" class="btn btn-warning fa fa-edit"></a>
                        <a href="admin/{{$datas->id}}/delete" class="btn btn-danger fa fa-trash-o"></a>
                      </td>
                    </tr>

                    @endforeach
                @endif
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

@endsection