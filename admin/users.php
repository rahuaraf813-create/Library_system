<?php 
include '../includes/session_check.php'; 
include '../config/db.php'; 
include '../includes/header.php'; 
$sql = "SELECT user_id, first_name, last_name, email, username FROM user";
$result = $conn->query($sql);
?>

<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">System Staff Management</h4>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Staff ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><strong><?php echo $row['user_id']; ?></strong></td>
                            <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><span class="badge bg-secondary"><?php echo $row['username']; ?></span></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="4" class="text-center">No staff members found in database.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>