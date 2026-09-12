<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h3 fw-bold text-dark mb-1">My Active Campaigns</h1>
  <p class="text-muted mb-0">Manage active content deliverables, deadlines, and approvals.</p>
</div>

<div class="row g-4">
  
  <div class="col-12 col-md-6">
    <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
      <div class="d-flex justify-content-between align-items-start mb-3">
        <span class="badge badge-pending">Content Pending</span>
        <span class="small text-danger fw-bold">Due in 3 Days</span>
      </div>

      <h3 class="h5 fw-bold text-dark mb-1">Protein Supplement Promotion</h3>
      <p class="small text-muted mb-3">FitLife Nutrition &bull; 1x Instagram Reel + 2x Stories</p>

      <div class="bg-light p-3 rounded-3 mb-4 small">
        <div class="fw-bold mb-1 text-dark">Deliverable Checklist:</div>
        <div class="text-success mb-1">✔️ Product Kit Delivered</div>
        <div class="text-muted">⏳ Reel Script & Draft Submission</div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between align-items-stretch align-items-sm-center gap-2 mt-auto">
        <a href="<?= base_url('creator/messages') ?>" class="btn btn-outline btn-sm">Chat with Brand</a>
        <button onclick="showToast('Content submission opened!')" class="btn btn-primary btn-sm">Submit Deliverable</button>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6">
    <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
      <div class="d-flex justify-content-between align-items-start mb-3">
        <span class="badge badge-success">Completed</span>
        <span class="small text-muted">Paid ₹15,000</span>
      </div>

      <h3 class="h5 fw-bold text-dark mb-1">Organic Glow Serum Launch</h3>
      <p class="small text-muted mb-3">Mamaearth &bull; Beauty Reel Showcase</p>

      <div class="bg-light p-3 rounded-3 mb-4 small">
        <div class="fw-bold mb-1 text-dark">Deliverable Status:</div>
        <div class="text-success">✔️ Approved & Published on Instagram</div>
      </div>

      <a href="<?= base_url('creator/earnings') ?>" class="btn btn-outline btn-sm w-100 text-center mt-auto">View Payout Receipt</a>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
