{{-- @dd($trains); --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="my-5">
           TRENI
        </h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Train CODE</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrive Station</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Arrive Date</th>
                    <th scope="col">Carriage Number</th>
                    <th scope="col">In Time</th>
                    <th scope="col">Deleted</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <th class="text-uppercase" scope="row">{{ $train['train_code'] }}</th>
                    <td>{{ $train['departure_station'] }}</td>
                    <td>{{ $train['arrive_station'] }}</td>
                    <td>{{ $train['departure_dateTime'] }}</td>
                    <td>{{ $train['arrive_dateTime'] }}</td>
                    <td>{{ $train['carriages_num'] }}</td>
                    <td>{{ $train['in_time'] }}</td>
                    <td>{{ $train['deleted'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</body>   
</html>
    