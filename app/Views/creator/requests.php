<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h2 fw-bold mb-1 text-dark">My Collaboration Requests</h1>
  <p class="text-secondary mb-0">Track your submitted pitches and incoming brand responses.</p>
</div>

<!-- FLASH ALERTS -->
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
          <th>Brand &amp; Campaign</th>
          <th>Proposal Pitch</th>
          <th>Date Submitted</th>
          <th>Status</th>
          <th class="text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($requests)): ?>
          <?php foreach ($requests as $req): ?>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="avatar bg-primary text-white fw-bold d-flex align-items-center justify-content-center rounded-circle" style="width:36px;height:36px;font-size:0.95rem;background:var(--gradient-hero) !important;">
                    <?= strtoupper(substr($req['company_name'] ?? 'B', 0, 1)) ?>
                  </div>
                  <div>
                    <div class="fw-bold small text-dark mb-0"><?= esc($req['company_name'] ?? 'Brand') ?></div>
                    <div class="small text-muted" style="font-size:0.75rem;"><?= esc($req['campaign_title'] ?? 'Campaign') ?></div>
                  </div>
                </div>
              </td>
              <td class="small text-secondary" style="max-width:250px;"><?= esc($req['proposal']) ?></td>
              <td class="small text-secondary"><?= date('d M Y', strtotime($req['created_at'])) ?></td>
              <td>
                <?php if ($req['status'] === 'accepted'): ?>
                  <span class="badge badge-success">Accepted</span>
                <?php elseif ($req['status'] === 'rejected'): ?>
                  <span class="badge badge-danger">Rejected</span>
                <?php else: ?>
                  <span class="badge badge-pending">Under Review</span>
                <?php endif; ?>
              </td>
              <td class="text-end">
                <a href="<?= base_url('creator/messages') ?>" class="btn btn-outline-primary btn-sm px-3">Open Chat</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="5" class="text-center py-4 text-muted">
              You haven't submitted any campaign proposals yet. Click <a href="<?= base_url('creator/discover') ?>" class="fw-bold text-primary">Discover Opportunities</a> to pitch to brands!
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>
