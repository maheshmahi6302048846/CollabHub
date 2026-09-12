<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="mb-4 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
  <div>
    <a href="<?= base_url('creator/campaigns') ?>" class="text-decoration-none text-muted small fw-semibold mb-2 d-inline-flex align-items-center gap-1">
      &larr; Back to My Campaigns
    </a>
    <h1 class="h2 fw-bold text-dark mb-1">Weight Loss Awareness Campaign</h1>
    <span class="badge badge-success">Active Partnership</span>
  </div>

  <div class="d-flex gap-2">
    <a href="<?= base_url('creator/messages') ?>" class="btn btn-primary px-4">Open Chat with Brand</a>
  </div>
</div>

<div class="row g-4">
  <div class="col-12 col-lg-8">
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
      <h3 class="h5 fw-bold text-dark mb-3">Deliverables Tracker</h3>
      
      <div class="d-flex flex-column gap-3">
        <div class="border rounded-3 p-3 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-2">
          <div>
            <div class="fw-bold text-dark mb-1">Deliverable #1: 60s Instagram Reel</div>
            <div class="small text-muted">Include hashtag #ResheWellness and direct promo link</div>
          </div>
          <span class="badge badge-success">Approved &amp; Paid</span>
        </div>

        <div class="border rounded-3 p-3 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-2">
          <div>
            <div class="fw-bold text-dark mb-1">Deliverable #2: Instagram Story Swipe Up</div>
            <div class="small text-muted">Post story with tagged location @ResheClinic</div>
          </div>
          <button onclick="showToast('Deliverable submitted for review!')" class="btn btn-outline btn-sm">Submit Link</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-lg-4">
    <div class="card border-0 shadow-sm rounded-4 p-4">
      <h4 class="h5 fw-bold text-dark mb-3">Earnings Breakdown</h4>
      <div class="bg-light p-3 rounded-3 mb-3">
        <div class="text-muted small">Fixed Payment</div>
        <div class="fw-bold fs-4 text-dark mt-1">₹5,000</div>
      </div>
      <div class="bg-light p-3 rounded-3">
        <div class="text-muted small">Bonus Commission</div>
        <div class="fw-bold fs-4 text-success mt-1">₹1,250</div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
