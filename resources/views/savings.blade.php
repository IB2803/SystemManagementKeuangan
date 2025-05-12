<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart savings</title>
</head>
<body>
    <h1>Smart savings</h1>
    <form action = "/savings" method ="POST">
        @csrf
        <Label for = "wanttosave">Want to Save :</Label>
        <input type = "number" name= "wanttosave" value="{{ old('wanttosave')}}" required>
        <br><br>
        <Label for = "days">Based On Duration : </Label>
        <input type = "number" name = "days" value="{{ old('days') }}" >
        <br><br>
        <Label for = "money">Based On Money :</Label>
        <input type = "number" name ="money" value = "{{ old('money') }}">
        <br><br>
        <select name="mode" required>
            <option value="days"> Based On Duration</option>
            <option value= "money"> Based On Money</option>
        </select>
        <br><br>
        <button type="submit" > submit </button>
    </form>
    @if (isset($mode))
        <div class="daily-savings">
            @for($i = 1; $i<= $duration; $i++)
                    <div class="day-box">
                        <label>
                            <input type="checkbox" name ="day{{ $i }}" data-amount={{number_format($dailyamount, 0, ',' , '.' ) }} class="day-checkbox" >
                            Day {{ $i }} : Rp. {{ number_format($dailyamount, 0, ',', '.') }} <br>
                        </label>
                    </div>
             @endfor

            {{-- @if ($mode == 'days')
                @for($i = 1; $i<= $duration; $i++)
                    <div class="day-box">
                        <label>
                            <input type="checkbox" name ="day{{ $i }}" data-amount={{number_format($dailyamount, 0, ',' , '.' ) }} class="day-checkbox" >
                            Day {{ $i }} : Rp. {{ number_format($dailyamount, 0, ',', '.') }} <br>
                        </label>
                    </div>
                @endfor
            @elseif($mode == 'money')
                @for($i = 1; $i<= $duration; $i++)
                    <div class="day-box">
                        <label>
                            <input type="checkbox" name ="day{{ $i }}" data-amount={{number_format($dailyamount, 0, ',' , '.' ) }} class="day-checkbox" >
                            Day {{ $i }} : Rp. {{ number_format($dailyamount, 0, ',', '.') }} <br>
                        </label>
                    </div>
                @endfor
            @endif --}}

        </div>
        <h3>Total Tertabung: Rp. <span id="total-saved"> 0</span></h3>
    @endif



    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.day-checkbox');
        const totalSavedDisplay = document.getElementById('total-saved');

        function updateTotal() {
            let total = 0;
            checkboxes.forEach(cb => {
                if (cb.checked) {
                    total += parseFloat(cb.dataset.amount)*1000;
                }
            });
            totalSavedDisplay.textContent = total.toLocaleString('id-ID');
        }

        checkboxes.forEach(cb => {
            cb.addEventListener('change', updateTotal);
        });
    });
    </script>

</body>

</html>
