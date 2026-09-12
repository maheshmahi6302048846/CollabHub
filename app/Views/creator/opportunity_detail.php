<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <a href="<?= base_url('creator/discover') ?>" class="text-decoration-none text-muted small fw-semibold mb-2 d-inline-flex align-items-center gap-1">
    &larr; Back to Discover
  </a>
  <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-2">
    <div>
      <h1 class="h2 fw-bold text-dark mb-1">Weight Loss Awareness Campaign</h1>
      <p class="text-secondary small mb-0">Posted by <strong>Reshe Clinic</strong> &bull; Fitness &amp; Health &bull; 10 Mar 2026</p>
    </div>
    <button onclick="showToast('Application pitched successfully!')" class="btn btn-primary px-4 py-2">Apply Now</button>
  </div>
</div>

<div class="row g-4">
  <!-- LEFT COLUMN - CAMPAIGN DETAILS -->
  <div class="col-12 col-lg-8">
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
      <h3 class="h5 fw-bold text-dark mb-3">Campaign Overview</h3>
      <p class="text-secondary leading-relaxed">
        Reshe Clinic is seeking 10 passionate fitness, health, and lifestyle creators to share authentic reviews and consultation stories for our upcoming Weight Loss Awareness initiative. Creators will receive free consultation sessions, complimentary wellness packs, and commission per conversion.
      </p>

      <h4 class="h6 fw-bold text-dark mt-4 mb-2">Deliverables Required:</h4>
      <ul class="text-secondary small ps-3 mb-4">
        <li>1x Instagram Reel (60s duration showcasing consultation experience)</li>
        <li>1x Instagram Story with direct swipe-up link</li>
        <li>1x Honest product &amp; service feedback post</li>
      </ul>

      <h4 class="h6 fw-bold text-dark mt-4 mb-2">Creator Eligibility Criteria:</h4>
      <ul class="text-secondary small ps-3 mb-0">
        <li>Minimum 10,000 Instagram followers</li>
        <li>Focus niche in Fitness, Nutrition, Healthcare, or Wellness</li>
        <li>Minimum 4.0% average engagement rate</li>
      </ul>
    </div>
  </div>

  <!-- RIGHT COLUMN - BRAND INFO CARD -->
  <div class="col-12 col-lg-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center">
      <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=120&q=80" class="avatar avatar-xl rounded-circle mx-auto mb-3" style="width:80px;height:80px;object-fit:cover;" alt="Reshe Clinic">
      <h4 class="h5 fw-bold text-dark mb-1">Reshe Clinic</h4>
      <div class="small text-muted mb-3">Verified Medical &amp; Wellness Brand</div>

      <div class="bg-light p-3 rounded-3 text-start small mb-4">
        <div class="d-flex justify-content-between mb-2">
          <span class="text-muted">Total Campaigns</span>
          <span class="fw-bold text-dark">14</span>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <span class="text-muted">Payout Method</span>
          <span class="fw-bold text-success">Verified Bank</span>
        </div>
        <div class="d-flex justify-content-between">
          <span class="text-muted">Avg Response Time</span>
          <span class="fw-bold text-dark">&lt; 2 Hours</span>
        </div>
      </div>

      <button onclick="showToast('Application pitched successfully!')" class="btn btn-primary w-100 py-2">Submit Proposal</button>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
