<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<?php
  $title        = $campaign['title'] ?? 'Campaign Details';
  $companyName  = $campaign['company_name'] ?? 'Verified Brand';
  $category     = $campaign['category'] ?? 'General';
  $budget       = !empty($campaign['budget']) ? number_format($campaign['budget']) : '0';
  $description  = $campaign['description'] ?? 'No description provided.';
  $deliverables = $campaign['deliverables'] ?? 'Standard deliverables.';
  $campaignId   = $campaign['id'] ?? 1;
?>

<!-- FLASH ALERTS -->
<?php if (session()->getFlashdata('error')): ?>
  <div class="alert alert-danger py-2 px-3 small rounded-3 mb-3 border-0 shadow-sm">
    <?= session()->getFlashdata('error') ?>
  </div>
<?php endif; ?>

<div class="mb-4">
  <a href="<?= base_url('creator/discover') ?>" class="text-decoration-none text-muted small fw-semibold mb-2 d-inline-flex align-items-center gap-1">
    &larr; Back to Discover
  </a>
  <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-2">
    <div>
      <h1 class="h2 fw-bold text-dark mb-1"><?= esc($title) ?></h1>
      <p class="text-secondary small mb-0">Posted by <strong><?= esc($companyName) ?></strong> &bull; <?= esc($category) ?></p>
    </div>
    <button type="button" class="btn btn-primary px-4 py-2 fw-bold" onclick="openModal('applyModal')">Apply Now &rarr;</button>
  </div>
</div>

<div class="row g-4">
  <!-- LEFT COLUMN - CAMPAIGN DETAILS -->
  <div class="col-12 col-lg-8">
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
      <h3 class="h5 fw-bold text-dark mb-3">Campaign Overview</h3>
      <p class="text-secondary leading-relaxed"><?= nl2br(esc($description)) ?></p>

      <h4 class="h6 fw-bold text-dark mt-4 mb-2">Required Deliverables:</h4>
      <p class="text-secondary small mb-0"><?= nl2br(esc($deliverables)) ?></p>
    </div>
  </div>

  <!-- RIGHT COLUMN - BRAND INFO CARD -->
  <div class="col-12 col-lg-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center">
      <div class="avatar shadow-sm bg-primary text-white fw-bold d-flex align-items-center justify-content-center rounded-circle mx-auto mb-3" style="width:70px;height:70px;font-size:1.8rem;background:var(--gradient-hero) !important;">
        <?= strtoupper(substr($companyName, 0, 1)) ?>
      </div>
      <h4 class="h5 fw-bold text-dark mb-1"><?= esc($companyName) ?></h4>
      <div class="small text-muted mb-3">Verified Brand</div>

      <div class="bg-light p-3 rounded-3 text-start small mb-4">
        <div class="d-flex justify-content-between mb-2">
          <span class="text-muted">Campaign Budget</span>
          <span class="fw-bold text-primary">₹<?= esc($budget) ?></span>
        </div>
        <div class="d-flex justify-content-between">
          <span class="text-muted">Category</span>
          <span class="fw-bold text-dark"><?= esc($category) ?></span>
        </div>
      </div>

      <button type="button" class="btn btn-primary w-100 py-2 fw-bold" onclick="openModal('applyModal')">Submit Proposal</button>
    </div>
  </div>
</div>

<!-- PROPOSAL APPLICATION MODAL -->
<div id="applyModal" class="modal-overlay">
  <div class="modal-card" style="max-width:550px;">
    <div class="modal-header">
      <h4 class="h5 fw-bold mb-0">Submit Campaign Pitch</h4>
      <button type="button" onclick="closeModal('applyModal')" style="background:none;border:none;font-size:1.25rem;cursor:pointer;">&times;</button>
    </div>

    <form action="<?= base_url('creator/apply') ?>" method="post">
      <?= csrf_field() ?>
      <input type="hidden" name="campaign_id" value="<?= esc($campaignId) ?>">

      <div class="modal-body p-3">
        <div class="mb-3">
          <label class="form-label fw-bold small">Your Pitch / Proposal Message</label>
          <textarea name="proposal" class="form-control" rows="4" required placeholder="Explain why you're a great fit for this campaign, past engagement rates, and content ideas..."></textarea>
        </div>
      </div>

      <div class="modal-footer p-3 bg-light rounded-bottom-4 d-flex justify-content-end gap-2">
        <button type="button" class="btn btn-outline" onclick="closeModal('applyModal')">Cancel</button>
        <button type="submit" class="btn btn-primary px-4 fw-bold">Send Proposal &rarr;</button>
      </div>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
