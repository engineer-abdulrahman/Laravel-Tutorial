<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 50%;
            margin: 0 auto;
        }

        table th,
        table td {
            text-align: center;
            border: 1px solid #eee;
            border-collapse: collapse;
            padding: 5px;
        }

        table th {
            background-color: rgb(255, 75, 75);
            color: #fff;
        }

        h3 {
            background-color: #eee;
            padding: 10px;
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    {{-- 
        Template Engine 
        @ => Delimiter
        Variables Built In Laravel

        $loop
    --}}
    <table>
        <h1>All Services</h1>
        <thead>
            <tr>
                <th>Service No</th>
                <th>Service</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                @dump($loop)
                <tr>
                    <td>
                        @if ($loop->first)
                            {!! '<h3>First service</h3>' !!}
                        @elseif ($loop->last)
                            {{ 'Last service' }}
                        @else
                            {{ $service[0] }}
                        @endif
                    </td>
                    <td>{{ $service[1] }}</td>
                    <td>{{ $service[2] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
