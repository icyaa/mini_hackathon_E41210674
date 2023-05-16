<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Data </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="{{ asset('js/controllers/user.js') }}"></script>
    </head>
    <body>

        {{-- button --}}
        <div>
            <br/>
            <h1 class="text-center">Daftar </h1> 
            <br/>
            {{-- add --}}
            <div class="d-flex flex-row-reverse">
            <button type="button" class="btn btn-success" onclick="window.location='{{ url("/crud/form_add") }}'"><i class="bi bi-plus-lg"></i> <b>Tambah</b></button> <br/>
            </div>
        </div class="padding-bottom">


        {{-- tabel --}}
        <div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama Pasien</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Poli</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->no_hp}}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->poli }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('crud.ubah', ['id' => $item->id])}}">Edit</a>
                                <button type="button" class="btn btn-danger" onclick="window.location=('/crud/delete/{{ $item->id }}?token={{ csrf_token() }}')">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>