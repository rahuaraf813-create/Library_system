<?php
include '../config/db.php';
include '../includes/header.php';

$book_res = $conn->query("SELECT COUNT(*) as total FROM book");
$book_data = $book_res->fetch_assoc();

$member_res = $conn->query("SELECT COUNT(*) as total FROM member");
$member_data = $member_res->fetch_assoc();

$user_res = $conn->query("SELECT COUNT(*) as total FROM user");
$user_data = $user_res->fetch_assoc();
?>

<div class="row">
    <div class="col-md-4">
        <div class="card bg-primary text-white p-4">
            <h3>Books</h3>
            <p class="display-6"><?php echo $book_data['total']; ?></p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white p-4">
            <h3>Members</h3>
            <p class="display-6"><?php echo $member_data['total']; ?></p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-info text-white p-4">
            <h3>Staff</h3>
            <p class="display-6"><?php echo $user_data['total']; ?></p>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>