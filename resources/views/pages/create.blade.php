<form method="POST" action="{{ route('p.store') }}">
   @csrf
   <label for="Name">Name:</label>
   <input type="text" id="Name" name="N" value="{{ old('Name') }}" required>
   <br>
   <label for="Email">Email:</label>
   <input type="email" id="Email" name="E" value="{{ old('Email') }}" required>
   <br>
   <label for="age">Age:</label>
   <input type="number" id="age" name="a" value="{{ old('age') }}" required>
   <br>
   <button type="submit">Create Profile</button>
</form>