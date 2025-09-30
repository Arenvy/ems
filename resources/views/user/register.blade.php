<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>Register</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow rounded-3">
                <div class="card-body p-4">
                    <h3 class="fw-bold text-center mb-4">Register Page</h3>
                    <form action="/register" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="registername" class="form-label">Name:</label>
                            <input name="name" type="text" class="form-control" id="registername" placeholder="Juan" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Email:</label>
                            <input name="email" type="email" class="form-control" id="registerEmail" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Password:</label>
                            <input name="password" type="password" class="form-control" id="registerPassword" placeholder="Enter password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                    <p class="text-center mt-3 small">Already have an account? 
                        <a href="login" class="fw-bold">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>