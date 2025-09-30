<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>Login</title>
</head>
    @auth
        <script>
            window.location.href="index";
        </script>
    @else
        <body>
            <div class="d-flex justify-content-center align-items-center min-vh-100">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow rounded-3">
                        <div class="card-body p-4">
                            <h3 class="fw-bold text-center mb-4">Login Page</h3>
                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="loginEmail" class="form-label">Email address</label>
                                    <input name="email" type="email" class="form-control" id="loginEmail" placeholder="name@example.com" required>
                                    </div>
                                    <div class="mb-3">
                                    <label for="loginPassword" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" id="loginPassword" placeholder="Enter password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Login</button>
                                </form>
                            <p class="text-center mt-3 small">Don’t have an account? 
                                <a href="register" class="fw-bold">Register here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('login_error'))
                <div class="toast-container position-fixed top-0 end-0 p-3">
                    <div class="toast align-items-center text-bg-danger border-0 show" role="alert">
                        <div class="d-flex">
                        <div class="toast-body">
                            {{ session('login_error') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        var toastEl = document.querySelector('.toast');
                        if (toastEl) {
                            var toast = new bootstrap.Toast(toastEl);
                            toast.show();
                        }
                    });
                </script>
            @endif
            @if(session('success'))
                <div class="toast-container position-fixed top-0 end-0 p-3">
                    <div class="toast align-items-center text-bg-success border-0 show" role="alert">
                        <div class="d-flex">
                        <div class="toast-body">
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        var toastEl = document.querySelector('.toast');
                        if (toastEl) {
                            var toast = new bootstrap.Toast(toastEl);
                            toast.show();
                        }
                    });
                </script>
            @endif
            <!-- Bootstrap JS (includes Popper) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </body>
    @endauth
</html>