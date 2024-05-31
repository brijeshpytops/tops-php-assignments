<!DOCTYPE html>
<html>
<head>
    <title>User Search</title>
</head>
<body>
    <form method="GET" action="/users">
        <input type="text" name="search" placeholder="Search users...">
        <button type="submit">Search</button>
    </form>

    @if($users->isNotEmpty())
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }} ({{ $user->email }})</li>
            @endforeach
        </ul>
    @else
        <p>No users found.</p>
    @endif
</body>
</html>
