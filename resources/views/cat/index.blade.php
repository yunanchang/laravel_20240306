<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    
    // print_r($data);
    
    // dd($data[0]);
    
    // foreach ($data as $item) {
    //   echo $item->departure_city;
    // }
    ?>


    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cats.index') }}">cat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dogs.index') }}">dog</a>
                </li>

            </ul>
        </div>

    </nav>

    <div class="container mt-3">
        <h2>cat Table</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>departure_city</th>
                    <th>arrival_city</th>
                </tr>
            </thead>
            <tbody>
           
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->departure_city}}</td>
                        <td>{{$item->arrival_city}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
