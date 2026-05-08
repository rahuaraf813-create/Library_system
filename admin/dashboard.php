<?php 
include '../config/db.php';
include '../includes/header.php'; 

$book_count = $conn->query("SELECT id FROM books")->num_rows;
$member_count = $conn->query("SELECT id FROM members")->num_rows;
$fine_total = $conn->query("SELECT SUM(fine_amount) as total FROM fines")->fetch_assoc();
?>

<div class="row">
    <div class="col-md-4">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <h5>Total Books</h5>
                <h2><?php echo $book_count; ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <h5>Total Members</h5>
                <h2><?php echo $member_count; ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">
                <h5>Pending Fines</h5>
                <h2>Rs. <?php echo number_format($fine_total['total'], 2); ?></h2>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>