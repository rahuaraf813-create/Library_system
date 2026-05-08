<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    
    <link rel="stylesheet" href="../assets/css/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
    
    <style>
        .navbar { margin-bottom: 30px; }
        .nav-link:hover { color: orange !important; }
        .navbar-brand { font-weight: bold; color: orange !important; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">📚 LIB-SYS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigationMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navigationMenu">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="books.php">Books</a></li>
                <li class="nav-item"><a class="nav-link" href="categories.php">Categories</a></li>
                <li class="nav-item"><a class="nav-link" href="members.php">Members</a></li>
                <li class="nav-item"><a class="nav-link" href="borrow.php">Borrowing</a></li>
                <li class="nav-item"><a class="nav-link" href="fines.php">Fines</a></li>
                <li class="nav-item"><a class="nav-link" href="users.php">Staff</a></li>
            </ul>
            
            <div class="d-flex align-items-center">
                <span class="text-light me-3 small">Hi, <?php echo $_SESSION['username']; ?></span>
                <a href="../auth/logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
            </div>
        </div>
    </div>
</nav>