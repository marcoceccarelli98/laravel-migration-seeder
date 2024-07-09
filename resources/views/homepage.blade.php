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
                    <th scope="col">Train ID</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrive Station</th>
                    <th scope="col">Departure Hour</th>
                    <th scope="col">Arrive Hour</th>
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
                    <th scope="row">{{ $train['train_id'] }}</th>
                    <td>{{ $train['departure_station'] }}</td>
                    <td>{{ $train['arrive_station'] }}</td>
                    <td>{{ $train['departure_hour'] }}</td>
                    <td>{{ $train['arrive_hour'] }}</td>
                    <td>{{\Carbon\Carbon::parse($train['departure_date'])->format('d-m-Y')}}</td>
                    <td>{{ \Carbon\Carbon::parse($train['arrive_date'])->format('d-m-Y') }}</td>
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
    