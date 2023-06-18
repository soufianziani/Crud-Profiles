<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <form method="POST" action="{{ route('p.update', $prot->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $prot->Name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $prot->Email }}" required>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ $prot->age }}" min="12" max="50" required>
        </div>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>



