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
                    <form action="{{route('crud.edit',$data->id)}}"  method="POST">
                        
                        @csrf
                        @method('PUT')
                        {{-- <input id="idUpdate" name="idUpdate" type="hidden" value="{{ old('idUpdate') }}"> --}}
                        <div class="form-group">
                            <label for="id_update" class="control-label">NIK</label>
                            <input type="text" id="id_update" name="id_update" class="form-control
                            {{ $errors->has('id') ? 'is-invalid' :'' }}"
                            readonly value="{{$data->id}}">
                            @if ($errors->has('id_update'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('id_update') }}</p>
                                </span>
                            @endif
                        </div>                        
                        <div class="form-group">
                            <label for="edit_nama" class="control-label">Nama Lengkap</label>
                            <input type="text" id="edit_nama" name="edit_nama" class="form-control
                            {{ $errors->has('edit_nama') ? 'is-invalid' :'' }}"
                            placeholder="Nama Lengkap" value="{{$data->nama}}">
                            @if ($errors->has('edit_nama'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('edit_nama') }}</p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="edit_no_hp" class="control-label">Nomor Telepon</label>
                            <input type="text" id="edit_no_hp" name="edit_no_hp" class="form-control
                            {{ $errors->has('edit_no_hp') ? 'is-invalid' :'' }}"
                            placeholder="Nomor Telepon" value="{{$data->no_hp}}">
                            @if ($errors->has('edit_no_hp'))no_hp
                                <span class="text-danger small">
                                    <p>{{ $errors->first('edit_no_hp') }}</p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="edit_alamat" class="control-label">Alamat</label>
                            <input type="text" id="edit_alamat" name="edit_alamat" class="form-control
                            {{ $errors->has('edit_alamat') ? 'is-invalid' :'' }}"
                            placeholder="Nomor Telepon" value="{{$data->alamat}}">
                            @if ($errors->has('edit_alamat'))no_hp
                                <span class="text-danger small">
                                    <p>{{ $errors->first('edit_alamat') }}</p>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="edit_poli" class="control-label">Poli</label>
                            <input type="text" id="edit_poli" name="edit_poli" class="form-control
                            {{ $errors->has('edit_poli') ? 'is-invalid' :'' }}"
                            placeholder="Poli" value="{{$data->poli}}">
                            @if ($errors->has('edit_poli'))
                                <span class="text-danger small">
                                    <p>{{ $errors->first('edit_poli') }}</p>
                                </span>
                            @endif
                        </div>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>