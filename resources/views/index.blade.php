<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Dashboard</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons (optional for sidebar/nav icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  </head>
  @auth
    <body>
      <!-- Top Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#">MyApp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="topNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-bell"></i> Notifications</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                  <i class="bi bi-person-circle"></i> Profile
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li>
                    <form method="POST" action="{{ route('user.logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Page Layout -->
      <div class="container-fluid">
        <div class="row">
          <!-- Sidebar -->
          <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse border-end">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#"><i class="bi bi-house-door me-2"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-people me-2"></i> Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-file-earmark-text me-2"></i> Reports</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-gear me-2"></i> Settings</a>
                </li>
              </ul>
            </div>
          </nav>

          <!-- Main Content -->
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <h2 class="fw-bold mb-4">Welcome, {{$loggedUser->name}}!</h2>

            <!-- Cards Row -->
            <div class="row g-4 mb-4">
              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text display-6 fw-bold">1,245</p>
                    <p class="text-muted small">Total registered users</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">Revenue</h5>
                    <p class="card-text display-6 fw-bold">$8,420</p>
                    <p class="text-muted small">This month</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">Tasks</h5>
                    <p class="card-text display-6 fw-bold">34</p>
                    <p class="text-muted small">Pending tasks</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Table Section -->
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Recent Activity</h5>
                <div class="table-responsive">
                  <table class="table table-striped align-middle">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2025-09-08</td>
                        <td>User registered</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td><button class="btn btn-sm btn-outline-primary">View</button></td>
                      </tr>
                      <tr>
                        <td>2025-09-07</td>
                        <td>Payment received</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td><button class="btn btn-sm btn-outline-primary">View</button></td>
                      </tr>
                      <tr>
                        <td>2025-09-06</td>
                        <td>Password reset</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td><button class="btn btn-sm btn-outline-primary">View</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </main>
        </div>
      </div>

      <!-- Bootstrap Bundle JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
  @else
    <script>
      window.location.href = "{{ route('user.login') }}";
    </script>
  @endauth
</html>