<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h2 fw-bold text-dark mb-1">Create New Campaign</h1>
  <p class="text-secondary mb-0">Define campaign parameters, target creator criteria, and compensation terms.</p>
</div>

<!-- FLASH ALERTS -->
<?php if (session()->getFlashdata('errors')): ?>
  <div class="alert alert-danger py-2 px-3 small rounded-3 mb-3 border-0 shadow-sm">
    <ul class="mb-0 ps-3">
      <?php foreach (session()->getFlashdata('errors') as $err): ?>
        <li><?= esc($err) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

<form action="<?= base_url('brand/campaigns/create') ?>" method="post">
  <?= csrf_field() ?>

  <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 mb-4">
    <h3 class="h5 fw-bold text-dark mb-4">Campaign Overview</h3>
    
    <div class="mb-3">
      <label class="form-label fw-bold small text-dark">Campaign Title</label>
      <input type="text" name="title" class="form-control" placeholder="e.g. Summer Hydration Launch" required value="<?= old('title') ?>">
    </div>

    <div class="row g-3 mb-3">
      <div class="col-12 col-md-6">
        <label class="form-label fw-bold small text-dark">Category</label>
        <select name="category" class="form-select" required>
          <option value="Fitness & Health">Fitness & Health</option>
          <option value="Fashion & Beauty">Fashion & Beauty</option>
          <option value="Tech & Gadgets">Tech & Gadgets</option>
          <option value="Food & Travel">Food & Travel</option>
          <option value="Lifestyle & Vlog">Lifestyle & Vlog</option>
        </select>
      </div>

      <div class="col-12 col-md-6">
        <label class="form-label fw-bold small text-dark">Total Budget (₹)</label>
        <input type="number" name="budget" class="form-control" placeholder="25000" required value="<?= old('budget', '25000') ?>">
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label fw-bold small text-dark">Influencers Needed</label>
      <input type="number" name="influencers_needed" class="form-control" placeholder="5" value="<?= old('influencers_needed', '5') ?>">
    </div>

    <div class="mb-3">
      <label class="form-label fw-bold small text-dark">Campaign Description</label>
      <textarea name="description" class="form-control" rows="3" required placeholder="Describe campaign goals and target audience..."><?= old('description', 'Promote our product line. Creators will receive complimentary product samples and monetary compensation.') ?></textarea>
    </div>

    <div class="mb-4">
      <label class="form-label fw-bold small text-dark">Required Deliverables</label>
      <textarea name="deliverables" class="form-control" rows="2" required placeholder="e.g. 1 Instagram Reel + 2 Stories"><?= old('deliverables', '1 Instagram Reel (60s) + 2 Stories with product link') ?></textarea>
    </div>

    <div class="d-flex justify-content-end gap-2">
      <a href="<?= base_url('brand/campaigns') ?>" class="btn btn-outline">Cancel</a>
      <button type="submit" class="btn btn-primary px-4 fw-bold">🚀 Publish Campaign Now</button>
    </div>
  </div>
</form>

<?= $this->endSection() ?>
