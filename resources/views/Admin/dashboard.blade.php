<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f7fa;
      display: flex;
      min-height: 100vh;
      overflow-x: hidden;
    }

    .sidebar {
      width: 260px;
      background: linear-gradient(135deg, #1e1f26, #2c2f36);
      color: white;
      height: 100vh;
      position: fixed;
      padding: 25px 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .sidebar h2 {
      font-size: 24px;
      text-align: center;
      margin-bottom: 40px;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      padding: 12px 15px;
      color: #cfd8dc;
      text-decoration: none;
      margin-bottom: 12px;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .sidebar a i {
      margin-right: 12px;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #39404f;
      color: #ffffff;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-toggle {
      cursor: pointer;
    }

    .dropdown-menu {
      display: none;
      flex-direction: column;
      background-color: #333;
      border-radius: 8px;
      margin: 10px 0 10px 20px;
      padding: 8px 0;
    }

    .dropdown-menu a {
      padding: 10px 20px;
      color: #ddd;
      text-decoration: none;
      transition: 0.3s;
    }

    .dropdown-menu a:hover {
      background-color: #444;
      color: #fff;
    }

    .dropdown.open .dropdown-menu {
      display: flex;
    }

    .main {
      margin-left: 260px;
      padding: 30px;
      width: calc(100% - 260px);
    }

    .header {
      background-color: #ffffff;
      border-radius: 12px;
      padding: 20px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      margin-bottom: 30px;
    }

    .header h2 {
      font-weight: 600;
      color: #333;
    }

    .header div {
      display: flex;
      align-items: center;
    }

    .header span {
      font-weight: 500;
      margin-right: 20px;
    }

    .header a {
      background-color: #ef5350;
      color: white;
      padding: 8px 16px;
      border-radius: 8px;
      text-decoration: none;
      font-size: 14px;
      transition: background 0.3s ease;
    }

    .header a:hover {
      background-color: #d32f2f;
    }

    .dashboard-welcome {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
      margin-top: 20px;
      font-family: 'Poppins', sans-serif;
    }

    .dashboard-welcome h3 {
      font-size: 28px;
      font-weight: 600;
      color: #2b2d42;
      margin-bottom: 15px;
    }

    .dashboard-welcome p {
      font-size: 16px;
      line-height: 1.7;
      color: #555;
      margin-bottom: 10px;
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
        flex-direction: row;
        justify-content: space-around;
      }

      .main {
        margin-left: 0;
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <div>
      <h2><i class="fas fa-cube"></i> Dashboard</h2>
      <a href="#" class="active"><i class="fas fa-home"></i> Home</a>

      <div class="dropdown" id="categoryDropdown">
        <a class="dropdown-toggle" onclick="toggleDropdown('categoryDropdown')">
          <i class="fas fa-layer-group"></i> Categories <i class="fas fa-caret-down ms-auto"></i>
        </a>
        <div class="dropdown-menu">
          <a href="{{ url('addcategory') }}">Add Category</a>
          <a href="{{ url('showcateogries') }}">Show Categories</a>
        </div>
      </div>

      <a href="{{ url('addquize') }}"><i class="fas fa-list"></i> Quizzes</a>
      <a href="{{ url('showquestions') }}"><i class="fas fa-question-circle"></i> Questions</a>
    </div>
  </div>

  <div class="main">
    <div class="header">
      <h2>Admin Dashboard</h2>
      <div>
        <span>Welcome, {{ Auth::user()->name }}</span>
        <a href="{{ url('logout') }}">Logout</a>
      </div>
    </div>

    @yield('content')

    <div class="dashboard-welcome">
     
      
    </div>
  </div>

  <script>
    function toggleDropdown(id) {
      const dropdown = document.getElementById(id);
      dropdown.classList.toggle('open');
    }
  </script>

</body>
</html>
