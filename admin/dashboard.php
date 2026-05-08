<?php 
    include '../config/db.php'; 
    include '../includes/header.php'; 

    $leaderName     = "Leader"; 
    $dbStatus       = $conn ? "CONNECTED" : "DISCONNECTED";
    $statusColor    = $conn ? "success" : "danger";
?>

<header class="mb-5 border-bottom pb-3">
    <h2 class="fw-bold text-dark">Welcome, <?php echo $leaderName; ?></h2>
    <p class="text-secondary mb-0">Project Integration Control Panel</p>
</header>

<div class="row g-4">

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <h6 class="text-uppercase text-muted small fw-bold">System Layer 01</h6>
                <h4 class="fw-bold mb-3">Database</h4>
                <p class="text-muted small">Validating the link between PHP and MySQL server.</p>
                <div class="pt-2">
                    <span class="badge rounded-0 bg-<?php echo $statusColor; ?> w-100 py-2">
                        <?php echo $dbStatus; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <h6 class="text-uppercase text-muted small fw-bold">System Layer 02</h6>
                <h4 class="fw-bold mb-3">Interface</h4>
                <p class="text-muted small">Checking local Bootstrap CSS file availability.</p>
                <div class="pt-2">
                    <div class="bg-info text-white text-center py-1 fw-bold small">
                        STYLING ACTIVE
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <h6 class="text-uppercase text-muted small fw-bold">System Layer 03</h6>
                <h4 class="fw-bold mb-3">Operations</h4>
                <p class="text-muted small">Testing JavaScript event handling and footer links.</p>
                <div class="pt-2">
                    <button class="btn btn-dark btn-sm w-100 rounded-0" onclick="alert('Operations Check: Passed')">
                        RUN DIAGNOSTIC
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include '../includes/footer.php'; ?>