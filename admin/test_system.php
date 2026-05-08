<?php 
include '../config/db.php'; 
include '../includes/header.php'; 
?>

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">System Integration Check</h4>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col-md-4">
                        <i class="fas fa-database fa-3x text-success mb-2"></i>
                        <h5>Database</h5>
                        <?php if ($conn): ?>
                            <span class="text-success fw-bold">Connected</span>
                        <?php else: ?>
                            <span class="text-danger fw-bold">Failed</span>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4">
                        <i class="fab fa-bootstrap fa-3x text-primary mb-2"></i>
                        <h5>Bootstrap</h5>
                        <span class="text-primary fw-bold">CSS Active</span>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-code fa-3x text-info mb-2"></i>
                        <h5>JavaScript</h5>
                        <button class="btn btn-sm btn-info text-white" onclick="alert('JS Path is Correct!')">Test JS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>