<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h2 fw-bold mb-1 text-dark">Discover Opportunities</h1>
  <p class="text-secondary mb-0">Browse and apply to brand campaigns matching your profile.</p>
</div>

<!-- SEARCH & FILTER TOOLBAR -->
<div class="card border-0 shadow-sm rounded-4 p-3 mb-4">
  <form method="get" action="<?= base_url('creator/discover') ?>" class="row g-2">
    <div class="col-12 col-md-8">
      <select name="category" class="form-select" onchange="this.form.submit()">
        <option value="all" <?= ($selectedCategory ?? '') === 'all' ? 'selected' : '' ?>>All Categories</option>
        <option value="Fitness & Health" <?= ($selectedCategory ?? '') === 'Fitness & Health' ? 'selected' : '' ?>>Fitness & Health</option>
        <option value="Health & Wellness" <?= ($selectedCategory ?? '') === 'Health & Wellness' ? 'selected' : '' ?>>Health & Wellness</option>
        <option value="Fashion & Beauty" <?= ($selectedCategory ?? '') === 'Fashion & Beauty' ? 'selected' : '' ?>>Fashion & Beauty</option>
        <option value="Tech & Gadgets" <?= ($selectedCategory ?? '') === 'Tech & Gadgets' ? 'selected' : '' ?>>Tech & Gadgets</option>
        <option value="Food & Travel" <?= ($selectedCategory ?? '') === 'Food & Travel' ? 'selected' : '' ?>>Food & Travel</option>
      </select>
    </div>
    <div class="col-12 col-md-4">
      <a href="<?= base_url('creator/discover') ?>" class="btn btn-outline-secondary w-100">Reset Filters</a>
    </div>
  </form>
</div>

<!-- GRID OF DEALS FROM DATABASE -->
<div class="row g-4">
  <?php if (!empty($campaigns)): ?>
    <?php foreach ($campaigns as $camp): ?>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-interactive h-100 border-0 shadow-sm rounded-4 p-4 d-flex flex-column">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <span class="badge badge-primary"><?= esc($camp['category']) ?></span>
            <span class="small text-muted"><?= esc($camp['company_name'] ?? 'Verified Brand') ?></span>
          </div>
          <h3 class="h5 fw-bold mb-1 text-dark"><?= esc($camp['title']) ?></h3>
          <p class="small text-secondary mb-3"><?= esc($camp['description']) ?></p>
          <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-auto">
            <span class="fw-bold text-primary">Budget: ₹<?= number_format($camp['budget']) ?></span>
            <a href="<?= base_url('creator/discover/' . $camp['id']) ?>" class="btn btn-primary btn-sm px-3">View Details</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <div class="col-12 text-center py-5">
      <div class="fs-1 mb-2">📢</div>
      <h3 class="h5 fw-bold text-dark">No active campaigns found</h3>
      <p class="text-muted small">Try resetting your category filters or check back soon!</p>
    </div>
  <?php endif; ?>
</div>

<?= $this->endSection() ?>
