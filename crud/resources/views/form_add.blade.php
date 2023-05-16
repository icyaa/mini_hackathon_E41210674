<!DOCTYPE html>
<html>
    <head>
        <title>Request dengan Input Laravel</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Formulir </h1>
                    <form id="form_add" action="/crud/add" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id" class="control-label">NIK</label>
                            <input type="text" id="id" name="id" class="form-control
                            {{ $errors->has('id') ? 'is-invalid' :'' }}"
                            placeholder="NIK" value="{{ old ('id') }}">
                            @if ($errors->has('id'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('id') }}</p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nama" class="control-label">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" class="form-control
                            {{ $errors->has('nama') ? 'is-invalid' :'' }}"
                            placeholder="Nama Lengkap" value="{{ old ('nama') }}">
                            @if ($errors->has('nama'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('nama') }}</p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="control-label">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control
                            {{ $errors->has('alamat') ? 'is-invalid' :'' }}"
                            placeholder="Alamat" value="{{ old ('alamat') }}">
                            @if ($errors->has('alamat'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('alamat') }}</p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="control-label">Nomor Telepon</label>
                            <input type="text" id="no_hp" name="no_hp" class="form-control
                            {{ $errors->has('no_hp') ? 'is-invalid' :'' }}"
                            placeholder="Nomor Telepon" value="{{ old ('no_hp') }}">
                            @if ($errors->has('no_hp'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('no_hp') }}</p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="poli" class="control-label">Poli</label>
                            <input type="text" id="poli" name="poli" class="form-control
                            {{ $errors->has('poli') ? 'is-invalid' :'' }}"
                            placeholder="Poli" value="{{ old ('poli') }}">
                            @if ($errors->has('poli'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('poli') }}</p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pic" class="control-label">Upload Kartu Kunjungan (gambar)</label>
                            <input type="file" id="pic" name="pic" class="form-control
                            {{ $errors->has('pic') ? 'is-invalid' :'' }}"
                            placeholder="pic" value="{{ old ('pic') }}">
                            @if ($errors->has('pic'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('pic') }}</p>
                                </span>
                            @endif
                        </div>
                        <input id="button" name="button" type="submit" value="Simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>