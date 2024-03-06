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
    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('cats.index')}}">cat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('dogs.index')}}">dog</a>
            </li>
        
          </ul>
        </div>
      
      </nav>

<div class="container mt-3">
  <h2>dog  Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <div class="text-end">
    <a href="{{route('dogs.excel')}}">excel</a>
    <a href="{{route('dogs.create')}}">add</a>
</div>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>cat</td>
        <td>
            <a href=""></a>
            <a href=""></a>
        </td>
      </tr>
     
    
    </tbody>
  </table>
</div>

</body>
</html>
