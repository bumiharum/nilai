<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container-fluid" style="padding-top: 20px;">
    <div class="row">
      <div class="col-md-12">
        <center>
          <h4>PENDIDIKAN AGAMA ISLAM</h4><hr>
        </center>

        {{-- notifikasi form validasi --}}
        @if ($errors->has('file'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('file') }}</strong>
        </span>
        @endif

        {{-- notifikasi sukses --}}
        @if ($sukses = Session::get('sukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $sukses }}</strong>
        </div>
        @endif

        <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
          IMPORT EXCEL
        </button>

        <!-- Import Excel -->
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form method="post" action="/pai/import_excel" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                </div>
                <div class="modal-body">

                  {{ csrf_field() }}

                  <label>Pilih file excel</label>
                  <div class="form-group">
                    <input type="file" name="file" required="required">
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Import</button>
                </div>
              </div>
            </form>
          </div>
        </div>



        <a href="/nilai/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

        <table class='table table-bordered'>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th style="color: red; width: 10px;">S 1</th>
              <th>P 1</th>
              <th>K 1</th>
              <th style="color: red; width: 10px;" >S 2</th>
              <th>P 2</th>
              <th>K 2</th>
              <th style="color: red; width: 10px;">S 3</th>
              <th>P 3</th>
              <th>K 3</th>
              <th style="color: red; width: 10px;">S 4</th>
              <th>P 4</th>
              <th>K 4</th>
              <th style="color: red; width: 10px;">S 5</th>
              <th>P 5</th>
              <th>K 5</th>
              <th style="color: red; width: 10px;">S 6</th>
              <th>P 6</th>
              <th>K 6</th>
              <th>NR</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1 @endphp
            @foreach($pai as $s)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{$s->nama}}</td>
              <td style="color: red">{{$s->S1}}</td>
              <td>{{$s->P1}}</td>
              <td>{{$s->K1}}</td>
              <td style="color: red">{{$s->S2}}</td>
              <td>{{$s->P2}}</td>
              <td>{{$s->K2}}</td>
              <td style="color: red">{{$s->S3}}</td>
              <td>{{$s->P3}}</td>
              <td>{{$s->K3}}</td>
              <td style="color: red">{{$s->S4}}</td>
              <td>{{$s->P4}}</td>
              <td>{{$s->K4}}</td>
              <td style="color: red">{{$s->S5}}</td>
              <td>{{$s->P5}}</td>
              <td>{{$s->K5}}</td>
              <td style="color: red">{{$s->S6}}</td>
              <td>{{$s->P6}}</td>
              <td>{{$s->K6}}</td>
              <td>{{$s->NB}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>



</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
