<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Register Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username">

        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email">

        <div class="form-group">
            <label for="gender" class="text-secondary">Gender</label>
            <select id="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">

        <label for="confirm-password">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" id="confirm-password">

        <button type="submit" class="btn btn-light btn-block">Register</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
