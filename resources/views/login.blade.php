<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="{{route('validate-register')}}" method="post">
            @csrf
            <input type="email" name="email" required>
            <input type="password" name="password" required>
            <input type="text" name="user" required>
            <input type="submit">
        </form>
    </main>    
</body>
</html>