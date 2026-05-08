<?php 
    include '../config/db.php'; 
    include '../includes/header.php'; 

    $leaderName     = "Leader"; 
    $dbStatus       = $conn ? "CONNECTED" : "DISCONNECTED";
    $statusColor    = $conn ? "success" : "danger";
?>

<header class="py-3 mb-4 border-bottom">
    <h2 class="fw-light">Project Dashboard: <span class="fw-bold"><?php echo $leaderName; ?></span></h2>
    <p class="text-muted small text-uppercase tracking-wide">System Health Monitoring</p>
</header>

<div class="row g-4">

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <h5 class="fw-bold border-start border-primary border-4 ps-2 mb-3">Database</h5>
                <p class="text-muted small">Status of the link to the local MySQL server.</p>
                <hr>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="small text-uppercase fw-bold">Link Status</span>
                    <span class="text-<?php echo $statusColor; ?> fw-bold"><?php echo $dbStatus; ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <h5 class="fw-bold border-start border-info border-4 ps-2 mb-3">Styling</h5>
                <p class="text-muted small">Verification of local Bootstrap CSS framework.</p>
                <hr>
                <div class="mt-3">
                    <div class="p-2 bg-light text-center text-info small fw-bold">
                        BOOTSTRAP ACTIVE
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
                <h5 class="fw-bold border-start border-warning border-4 ps-2 mb-3">Logic</h5>
                <p class="text-muted small">Testing JavaScript execution and event listeners.</p>
                <hr>
                <div class="mt-3">
                    <button class="btn btn-dark w-100 btn-sm rounded-0" onclick="alert('System Logic: Operational')">
                        RUN DIAGNOSTICS
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include '../includes/footer.php'; ?>