<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php
  $companyName = $brand['company_name'] ?? session()->get('name') ?? '';
  $ownerName   = $brand['owner_name'] ?? '';
?>

<section class="py-5 bg-app" style="min-height: calc(100vh - 120px);">
  <div class="container container-sm">
    <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5">
      
      <div class="text-center mb-4">
        <span class="badge badge-info mb-2">BRAND ONBOARDING</span>
        <h2 class="h3 fw-bold text-dark mb-1">Setup Your Business Account</h2>
        <p class="text-muted small">Fill in your business details to start matching with verified content creators.</p>
      </div>

      <form action="<?= base_url('brand/onboarding') ?>" method="post">
        <?= csrf_field() ?>

        <div class="row g-3 mb-3">
          <div class="col-12 col-md-6">
            <label class="form-label fw-bold small text-dark">Company / Brand Name</label>
            <input type="text" name="company_name" class="form-control" value="<?= esc($companyName) ?>" required placeholder="Acme Corp">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label fw-bold small text-dark">Owner / Manager Name</label>
            <input type="text" name="owner_name" class="form-control" value="<?= esc($ownerName) ?>" placeholder="Your Name">
          </div>
        </div>

        <div class="mb-4">
          <label class="form-label fw-bold small text-dark">Industry</label>
          <select name="industry" class="form-select">
            <option value="Health & Wellness">Health & Wellness</option>
            <option value="Beauty & Cosmetics">Beauty & Cosmetics</option>
            <option value="Fashion & Apparel">Fashion & Apparel</option>
            <option value="Food & FMCG">Food & FMCG</option>
            <option value="Tech & Software">Tech & Software</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">Complete Business Profile &rarr;</button>
      </form>

    </div>
  </div>
</section>

<?= $this->endSection() ?>
