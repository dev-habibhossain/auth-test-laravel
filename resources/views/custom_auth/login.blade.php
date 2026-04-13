<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
  <title>Login Page</title>
</head>
<body>
  <h1>Login</h1>
  <form method="POST" action="">
    @csrf
    <div>
      <label for="email">Email:</label>
      <input type="email"  name="email" required>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" required>
    </div>
    <button type="submit">Login</button>
  </form>
</body>
</html>