<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    <div class="container">
        <h2>Simulasi Budgeting</h2>
        <p><strong>Saldo Saat Ini:</strong> Rp. {{ number_format($balance, 0, ',', '.') }}</p>

        <form method="POST" action="{{ url('/budgeting') }}">
            @csrf
            <div id="items">
                <div class="mb-2">
                    <input type="text" name="item_name[]" placeholder="Nama Kebutuhan" required>
                    <input type="number" name="item_cost[]" placeholder="Harga" required>
                </div>
            </div>
            <button type="button" onclick="addItem()">+ Tambah Kebutuhan</button>
            <br><br>
            <button type="submit" name="simulate" value="1">Simulasikan</button>
        </form>

        @if(session('items'))
            <hr>
            <h3>Simulasi Pengurangan Saldo (Per Detik)</h3>
            <ul>
                @foreach(session('items') as $i => $name)
                    <li>{{ $name }} - Rp. {{ number_format(session('costs')[$i], 0, ',', '.') }}</li>
                @endforeach
            </ul>
            <p>Total Kebutuhan: Rp. {{ number_format(session('totalNeeds'), 0, ',', '.') }}</p>
            <p>Durasi Simulasi: {{ session('duration') }} detik</p>

            <h4>Sisa Saldo: <span id="remaining">Rp. {{ number_format($balance, 0, ',', '.') }}</span></h4>

            <script>
                let balance = {{ $balance }};
                let totalNeeds = {{ session('totalNeeds') }};
                let duration = {{ session('duration') }};
                let perSecond = totalNeeds / duration;

                function simulate() {
                    if (duration > 0 && balance > 0) {
                        balance -= perSecond;
                        document.getElementById("remaining").innerText = 'Rp. ' + Math.floor(balance).toLocaleString('id-ID');
                        duration--;
                    }
                }

                setInterval(simulate, 1000);
            </script>
        @endif
    </div>

    <script>
        function addItem() {
            const container = document.getElementById('items');
            const newItem = document.createElement('div');
            newItem.classList.add('mb-2');
            newItem.innerHTML = `
                <input type="text" name="item_name[]" placeholder="Nama Kebutuhan" required>
                <input type="number" name="item_cost[]" placeholder="Harga" required>`;
            container.appendChild(newItem);
        }
    </script>


</body>
</html>
