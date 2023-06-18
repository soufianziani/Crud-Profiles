<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <title>Document</title>
</head>
<body>
   @if(session('Message'))
   <div class="alert alert-success">
      {{ session('Message') }}
   </div>
   @endif
   <form method="POST" action="{{ route('p.deleteAll') }}" onsubmit="return confirm('Are you sure you want to delete all profiles?')">
      @csrf
      @method('DELETE')
      <button type="submit">Delete All Profiles</button>
   </form>
   <button > <a href="{{ route('p.create')}}"> create </a></button>
   <table class="table">
      <thead>
         <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>age</th>
            <th>Actions</th>
         </tr>
      </thead>
      <tbody>
         @foreach($pro as $el)
         <tr>
            <td>{{ $el->id }}</td>
            <td>{{$el->Name}}</td>
            <td>{{$el->Email}}</td>
            <td>{{$el->age}}</td>
            <td>
               <form action="{{ route('p.destroy', $el->id) }}"  method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('wach bghiti tmss7 had khona ?')"  >Delete </button>
                  </form>
                  <button > <a href="{{ route('p.edit', $el->id) }}">Edit</a></button>
            </td>
         
         </tr>
         
         @endforeach

      </tbody>
   </table>
</body>
</html>