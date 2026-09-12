<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
  <div>
    <h1 class="h2 fw-bold mb-1 text-dark">Brand Campaigns</h1>
    <p class="text-secondary mb-0">Manage active campaigns, budget allocation, and creator submissions.</p>
  </div>

  <a href="<?= base_url('brand/campaigns/create') ?>" class="btn btn-primary px-4 py-2 text-nowrap">+ Create Campaign</a>
</div>

<!-- FLASH MESSAGES -->
<?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success py-2 px-3 small rounded-3 mb-3 border-0 shadow-sm">
    <?= session()->getFlashdata('success') ?>
  </div>
<?php endif; ?>

<div class="card border-0 shadow-sm rounded-4 p-3 p-md-4">
  <div class="table-responsive">
    <table class="table align-middle mb-0">
      <thead>
        <tr class="text-secondary small">
          <th>Campaign Name</th>
          <th>Category</th>
          <th>Budget</th>
          <th>Creators Hired / Needed</th>
          <th>Status</th>
          <th class="text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($campaigns)): ?>
          <?php foreach ($campaigns as $camp): ?>
            <tr>
              <td class="fw-bold text-dark">
                <?= esc($camp['title']) ?>
                <div class="small text-muted fw-normal"><?= esc($camp['deliverables'] ?? '') ?></div>
              </td>
              <td class="small text-secondary"><?= esc($camp['category']) ?></td>
              <td class="fw-bold text-primary">₹<?= number_format($camp['budget']) ?></td>
              <td class="small text-secondary"><?= esc($camp['influencers_hired'] ?? 0) ?> / <?= esc($camp['influencers_needed'] ?? 1) ?> Creators</td>
              <td>
                <span class="badge <?= $camp['status'] === 'active' ? 'badge-success' : 'badge-pending' ?>">
                  <?= ucfirst(esc($camp['status'])) ?>
                </span>
              </td>
              <td class="text-end">
                <a href="<?= base_url('brand/requests') ?>" class="btn btn-outline-primary btn-sm px-3">View Applicants</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" class="text-center py-4 text-muted">
              No campaigns created yet. Click <strong>"+ Create Campaign"</strong> above to launch your first brand campaign!
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>
