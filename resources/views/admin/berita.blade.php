<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita Baru - Admin</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        .container { max-width: 700px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input[type="date"],
        .form-group textarea { width: calc(100% - 22px); padding: 10px; border: 1px solid #ddd; border-radius: 4px; }
        .form-group textarea { min-height: 150px; resize: vertical; }
        .btn-submit { background-color: #5cb85c; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .btn-submit:hover { background-color: #4cae4c; }
        .btn-back { display: inline-block; margin-top:15px; padding: 10px 15px; background-color: #f0ad4e; color:white; text-decoration:none; border-radius:4px;}
        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
        .alert-danger { color: #a94442; background-color: #f2dede; border-color: #ebccd1; }
        .alert-danger ul { margin-top: 0; margin-bottom: 0; padding-left: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Berita Baru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada masalah dengan inputanmu:<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.berita.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="isi_berita">Isi Berita:</label>
                <textarea name="isi_berita" id="isi_berita" rows="5" required>{{ old('isi_berita') }}</textarea>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}" required>
            </div>
            <button type="submit" class="btn-submit">Simpan Berita</button>
        </form>
        <a href="{{ route('admin.dashboard') }}" class="btn-back">Kembali ke Dashboard</a>
    </div>
</body>
</html>
