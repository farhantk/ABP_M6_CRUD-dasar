<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
        <div class="col-3">
            <span class="float-left">{{ session('msg') }}</span>
            <a href="/product/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
            <table class="table table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            @foreach($list as $d)
            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->price }}</td>
                <td>
                <a href="/product/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
                <form method="post" action="/product/{{ $d->id }}/del" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
                </td>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
</body>
</html>