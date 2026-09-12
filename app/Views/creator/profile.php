<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<?php
  $fullName       = $creator['full_name'] ?? session()->get('name') ?? 'Creator';
  $handle         = $creator['handle'] ?? '@creator';
  $niche          = !empty($creator['niche']) ? $creator['niche'] : 'Content & Lifestyle';
  $followersCount = !empty($creator['followers_count']) ? number_format($creator['followers_count']) : '0';
  $bio            = !empty($creator['bio']) ? $creator['bio'] : 'Welcome to my creator profile on CollabHub! Connect for brand deals & collaborations.';
  $initial        = strtoupper(substr($fullName, 0, 1));
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
  <div style="height:160px; background:var(--gradient-hero); position:relative;"></div>
  
  <div class="p-4 bg-white position-relative rounded-top-4 d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3" style="margin-top:-50px;">
    <div class="d-flex flex-column flex-sm-row gap-3 align-items-sm-end">
      <div class="avatar shadow-md bg-primary text-white fw-bold d-flex align-items-center justify-content-center rounded-circle" style="width:100px; height:100px; font-size:2.5rem; border:4px solid white; background:var(--gradient-hero) !important;">
        <?= esc($initial) ?>
      </div>
      <div>
        <div class="d-flex align-items-center gap-2 flex-wrap">
          <h1 class="h3 fw-bold text-dark mb-0"><?= esc($fullName) ?></h1>
          <span class="badge badge-primary">✓ Verified Creator</span>
        </div>
        <div class="text-muted small mt-1"><?= esc($handle) ?> &bull; <?= esc($niche) ?></div>
      </div>
    </div>

    <button type="button" class="btn btn-primary btn-sm px-4 fw-bold" onclick="openModal('editProfileModal')">
      Edit Profile Details
    </button>
  </div>
</div>

<!-- AUDIENCE METRICS ROW -->
<div class="row g-3 mb-4">
  <div class="col-12 col-md-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
      <div class="small text-muted fw-bold text-uppercase mb-1">Total Audience / Followers</div>
      <div class="h2 fw-extrabold text-primary mb-1"><?= esc($followersCount) ?></div>
      <div class="small text-success">Verified Platform Reach</div>
    </div>
  </div>

  <div class="col-12 col-md-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
      <div class="small text-muted fw-bold text-uppercase mb-1">Content Niche</div>
      <div class="h4 fw-bold text-dark mb-1 mt-2"><?= esc($niche) ?></div>
      <div class="small text-muted">Primary Category</div>
    </div>
  </div>

  <div class="col-12 col-md-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
      <div class="small text-muted fw-bold text-uppercase mb-1">Engagement Rate</div>
      <div class="h2 fw-extrabold text-success mb-1">7.8%</div>
      <div class="small text-muted">High Audience Interaction</div>
    </div>
  </div>
</div>

<!-- BIO & PORTFOLIO -->
<div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
  <h3 class="h5 fw-bold text-dark mb-2">Creator Bio</h3>
  <p class="text-secondary small mb-0"><?= nl2br(esc($bio)) ?></p>
</div>

<!-- EDIT PROFILE MODAL -->
<div id="editProfileModal" class="modal-overlay">
  <div class="modal-card" style="max-width:550px;">
    <div class="modal-header">
      <h4 class="h5 fw-bold mb-0">Edit Profile Information</h4>
      <button type="button" onclick="closeModal('editProfileModal')" style="background:none;border:none;font-size:1.25rem;cursor:pointer;">&times;</button>
    </div>
    
    <form action="<?= base_url('creator/profile') ?>" method="post">
      <?= csrf_field() ?>
      <div class="modal-body p-3">
        <div class="mb-3">
          <label class="form-label fw-bold small">Full Name</label>
          <input type="text" name="full_name" class="form-control" value="<?= esc($creator['full_name'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label fw-bold small">Handle</label>
          <input type="text" name="handle" class="form-control" value="<?= esc($creator['handle'] ?? '') ?>" required placeholder="@handle">
        </div>

        <div class="mb-3">
          <label class="form-label fw-bold small">Niche / Category</label>
          <select name="niche" class="form-select">
            <option value="Fashion & Beauty" <?= ($creator['niche'] ?? '') === 'Fashion & Beauty' ? 'selected' : '' ?>>Fashion & Beauty</option>
            <option value="Fitness & Health" <?= ($creator['niche'] ?? '') === 'Fitness & Health' ? 'selected' : '' ?>>Fitness & Health</option>
            <option value="Tech & Gadgets" <?= ($creator['niche'] ?? '') === 'Tech & Gadgets' ? 'selected' : '' ?>>Tech & Gadgets</option>
            <option value="Food & Travel" <?= ($creator['niche'] ?? '') === 'Food & Travel' ? 'selected' : '' ?>>Food & Travel</option>
            <option value="Lifestyle & Vlog" <?= ($creator['niche'] ?? '') === 'Lifestyle & Vlog' ? 'selected' : '' ?>>Lifestyle & Vlog</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label fw-bold small">Followers Count</label>
          <input type="number" name="followers_count" class="form-control" value="<?= esc($creator['followers_count'] ?? 0) ?>" placeholder="50000">
        </div>

        <div class="mb-3">
          <label class="form-label fw-bold small">Bio</label>
          <textarea name="bio" class="form-control" rows="3" placeholder="Tell brands about your content style..."><?= esc($creator['bio'] ?? '') ?></textarea>
        </div>
      </div>

      <div class="modal-footer p-3 bg-light rounded-bottom-4 d-flex justify-content-end gap-2">
        <button type="button" class="btn btn-outline" onclick="closeModal('editProfileModal')">Cancel</button>
        <button type="submit" class="btn btn-primary px-4 fw-bold">Save Changes</button>
      </div>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
