<?php 
    include '../config/db.php'; 
    include '../includes/header.php'; 

    // Humanizing the data: Define variables for clarity
    $leaderName     = "Leader"; 
    $dbStatus       = $conn ? "CONNECTED" : "DISCONNECTED";
    $statusColor    = $conn ? "success" : "danger";
?>

<header class="mb-5">
    <h2 class="fw-bold text-dark">Welcome back, <?php echo $leaderName; ?>!</h2>
    <p class="text-secondary">Here is your system integration overview for today.</p>
</header>

<div class="row g-4">

    <article class="col-md-4">
        <div class="card border-0 shadow-sm h-100 p-3">
            <div class="card-body text-center">
                <div class="bg-light rounded-circle py-4 mb-3 mx-auto" style="width: 80px;">
                    <i class="fas fa-server fa-2x text-primary"></i>
                </div>
                <h5 class="fw-bold">Database Server</h5>
                <p class="small text-muted">Checking connection to MySQL...</p>
                <span class="badge rounded-pill bg-<?php echo $statusColor; ?> px-4 py-2">
                    <?php echo $dbStatus; ?>
                </span>
            </div>
        </div>
    </article>

    <article class="col-md-4">
        <div class="card border-0 shadow-sm h-100 p-3">
            <div class="card-body text-center">
                <div class="bg-light rounded-circle py-4 mb-3 mx-auto" style="width: 80px;">
                    <i class="fas fa-palette fa-2x text-info"></i>
                </div>
                <h5 class="fw-bold">User Interface</h5>
                <p class="small text-muted">Bootstrap 5 Styling engine</p>
                <button class="btn btn-info text-white w-100 rounded-pill fw-bold mt-2">
                    STYLING ACTIVE
                </button>
            </div>
        </div>
    </article>

    <article class="col-md-4">
        <div class="card border-0 shadow-sm h-100 p-3">
            <div class="card-body text-center">
                <div class="bg-light rounded-circle py-4 mb-3 mx-auto" style="width: 80px;">
                    <i class="fas fa-microchip fa-2x text-warning"></i>
                </div>
                <h5 class="fw-bold">System Logic</h5>
                <p class="small text-muted">JavaScript & Event Handlers</p>
                <button class="btn btn-warning text-white w-100 rounded-pill fw-bold mt-2 shadow-sm" 
                        onclick="alert('System Logic is healthy!')">
                    DIAGNOSTIC TEST
                </button>
            </div>
        </div>
    </article>

</div>

<?php include '../includes/footer.php'; ?>