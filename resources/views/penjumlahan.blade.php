<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Penjumlahan sederhana</title>
    </head>
    <body>
        <h1>Penjumlahan Sederhana</h1>
        <form action ="/penjumlahan" method = "POST">
            @csrf
            <Label for ="angka1">Angka 1: </Label>
            <input type= "number" name="angka1" value="{{ old('angka1')}}" required >
            <br><br>
            <Label for ="angka2">Angka 2: </Label>
            <input type= "number" name="angka2" value="{{ old('angka2') }}" required>
            <br><br>
            <button type="submit" name= "operation" value="tambah">Hitungtambah</button>
            <button type="submit" name= "operation" value="kurang">Hitungkurang</button>
        </form>
        @if(isset($tambah))
            <h2> Hasil: {{ $angka1 }} + {{ $angka2 }} = {{ $tambah }}</h2>
        @endif

        @if(isset($kurang))
        <h2> Hasil: {{ $angka1 }} - {{ $angka2 }} = {{ $kurang }}</h2>
        @endif
    </body>
</html>


