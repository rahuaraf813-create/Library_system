<?php 
include('../includes/session_check.php');
include('../config/db.php');
include('../includes/header.php');

// Fetching real-time stats from the database tables you created
$books_query = $conn->query("SELECT id FROM books");
$books_count = $books_query->num_rows;

$members_query = $conn->query("SELECT id FROM members");
$members_count = $members_query->num_rows;

$categories_query = $conn->query("SELECT id FROM categories");
$cat_count = $categories_query->num_rows;
?>

<div class="container mt-4">
    <h2 class="mb-4">Library Overview</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Books</h5>
                    <p class="display-4"><?php echo $books_count; ?></p>
                    <a href="books.php" class="text-white">View Details →</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Active Members</h5>
                    <p class="display-4"><?php echo $members_count; ?></p>
                    <a href="members.php" class="text-white">View Details →</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="display-4"><?php echo $cat_count; ?></p>
                    <a href="categories.php" class="text-dark">View Details →</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>