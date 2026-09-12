<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<?php
  $companyName = $brand['company_name'] ?? session()->get('name') ?? 'Brand Business';
  $ownerName   = $brand['owner_name'] ?? 'Business Owner';
  $industry    = !empty($brand['industry']) ? $brand['industry'] : 'E-Commerce & Retail';
  $initial     = strtoupper(substr($companyName, 0, 1));
?>

<!-- FLASH ALERT MESSAGES -->
<?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success py-2 px-3 small rounded-3 mb-3 border-0 shadow-sm">
    <?= session()->getFlashdata('success') ?>
  </div>
<?php endif; ?>

<?php if (session()->getFlashdata('errors')): ?>
  <div class="alert alert-danger py-2 px-3 small rounded-3 mb-3 border-0 shadow-sm">
    <ul class="mb-0 ps-3">
      <?php foreach (session()->getFlashdata('errors') as $err): ?>
        <li><?= esc($err) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

<!-- COVER BANNER & PROFILE CARD -->
<div class="card border-0 shadow-sm rounded-4 p-0 overflow-hidden mb-4">
  <div style="height:160px; background:linear-gradient(135deg, #0F172A 0%, #1E1B4B 100%); position:relative;"></div>
  
  <div class="p-4 bg-white position-relative rounded-top-4 d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3" style="margin-top:-50px;">
    <div class="d-flex flex-column flex-sm-row gap-3 align-items-sm-end">
      <div class="avatar shadow-md bg-primary text-white fw-bold d-flex align-items-center justify-content-center rounded-circle" style="width:100px; height:100px; font-size:2.5rem; border:4px solid white; background:var(--gradient-hero) !important;">
        <?= esc($initial) ?>
      </div>
      <div>
        <div class="d-flex align-items-center gap-2 flex-wrap">
          <h1 class="h3 fw-bold text-dark mb-0"><?= esc($companyName) ?></h1>
          <span class="badge badge-info">✓ Verified Business</span>
        </div>
        <div class="text-muted small mt-1"><?= esc($industry) ?> &bull; Managed by <?= esc($ownerName) ?></div>
      </div>
    </div>

    <button type="button" class="btn btn-primary btn-sm px-4 fw-bold" onclick="openModal('editBrandModal')">
      Edit Business Profile
    </button>
  </div>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
  <h3 class="h5 fw-bold text-dark mb-2">About <?= esc($companyName) ?></h3>
  <p class="text-secondary mb-0 lh-base">
    Leading company in <?= esc($industry) ?> collaborating with influencers for real audience reach and brand growth.
  </p>
</div>

<!-- EDIT BRAND PROFILE MODAL -->
<div id="editBrandModal" class="modal-overlay">
  <div class="modal-card" style="max-width:550px;">
    <div class="modal-header">
      <h4 class="h5 fw-bold mb-0">Edit Business Information</h4>
      <button type="button" onclick="closeModal('editBrandModal')" style="background:none;border:none;font-size:1.25rem;cursor:pointer;">&times;</button>
    </div>
    
    <form action="<?= base_url('brand/profile') ?>" method="post">
      <?= csrf_field() ?>
      <div class="modal-body p-3">
        <div class="mb-3">
          <label class="form-label fw-bold small">Company Name</label>
          <input type="text" name="company_name" class="form-control" value="<?= esc($brand['company_name'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label fw-bold small">Owner / Contact Name</label>
          <input type="text" name="owner_name" class="form-control" value="<?= esc($brand['owner_name'] ?? '') ?>" placeholder="Owner Name">
        </div>

        <div class="mb-3">
          <label class="form-label fw-bold small">Industry / Category</label>
          <select name="industry" class="form-select">
            <option value="Health & Wellness" <?= ($brand['industry'] ?? '') === 'Health & Wellness' ? 'selected' : '' ?>>Health & Wellness</option>
            <option value="Fashion & Apparel" <?= ($brand['industry'] ?? '') === 'Fashion & Apparel' ? 'selected' : '' ?>>Fashion & Apparel</option>
            <option value="Beauty & Cosmetics" <?= ($brand['industry'] ?? '') === 'Beauty & Cosmetics' ? 'selected' : '' ?>>Beauty & Cosmetics</option>
            <option value="Tech & Software" <?= ($brand['industry'] ?? '') === 'Tech & Software' ? 'selected' : '' ?>>Tech & Software</option>
            <option value="Food & FMCG" <?= ($brand['industry'] ?? '') === 'Food & FMCG' ? 'selected' : '' ?>>Food & FMCG</option>
          </select>
        </div>
      </div>

      <div class="modal-footer p-3 bg-light rounded-bottom-4 d-flex justify-content-end gap-2">
        <button type="button" class="btn btn-outline" onclick="closeModal('editBrandModal')">Cancel</button>
        <button type="submit" class="btn btn-primary px-4 fw-bold">Save Changes</button>
      </div>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
