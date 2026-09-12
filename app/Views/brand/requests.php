<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h3 fw-bold text-dark mb-1">Collaboration Requests</h1>
  <p class="text-muted mb-0">Review applicant creator proposals and accept campaign applications.</p>
</div>

<!-- FLASH MESSAGES -->
<?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success py-2 px-3 small rounded-3 mb-3 border-0 shadow-sm">
    <?= session()->getFlashdata('success') ?>
  </div>
<?php endif; ?>

<div class="card border-0 shadow-sm rounded-4 p-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="h5 fw-bold text-dark mb-0">Incoming Creator Applications</h3>
  </div>

  <div class="d-flex flex-column gap-3">
    <?php if (!empty($requests)): ?>
      <?php foreach ($requests as $req): ?>
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between p-3 bg-light rounded-3 border gap-3">
          <div class="d-flex align-items-center gap-3">
            <div class="avatar bg-primary text-white fw-bold d-flex align-items-center justify-content-center rounded-circle" style="width:48px;height:48px;font-size:1.2rem;background:var(--gradient-hero) !important;">
              <?= strtoupper(substr($req['creator_name'] ?? 'C', 0, 1)) ?>
            </div>
            <div>
              <div class="fw-bold text-dark fs-6">
                <?= esc($req['creator_name']) ?> 
                <span class="small text-muted fw-normal me-2"><?= esc($req['handle']) ?></span>
                <span class="badge <?= $req['status'] === 'accepted' ? 'badge-success' : ($req['status'] === 'rejected' ? 'badge-danger' : 'badge-pending') ?>">
                  <?= ucfirst(esc($req['status'])) ?>
                </span>
              </div>
              <div class="small text-muted">Applied to <strong><?= esc($req['campaign_title']) ?></strong> &bull; <?= number_format($req['followers_count'] ?? 0) ?> Followers</div>
              <div class="small text-secondary mt-1">"<?= esc($req['proposal']) ?>"</div>
            </div>
          </div>

          <div class="d-flex gap-2 align-items-center flex-wrap">
            <a href="<?= base_url('brand/messages?with=' . ($req['creator_user_id'] ?? 7)) ?>" class="btn btn-outline-secondary btn-sm px-3">Chat</a>
            
            <?php if ($req['status'] === 'pending'): ?>
              <form action="<?= base_url('brand/requests/update-status') ?>" method="post" class="d-inline">
                <?= csrf_field() ?>
                <input type="hidden" name="request_id" value="<?= esc($req['id']) ?>">
                <input type="hidden" name="status" value="accepted">
                <button type="submit" class="btn btn-primary btn-sm px-3 fw-bold">Accept Proposal</button>
              </form>

              <form action="<?= base_url('brand/requests/update-status') ?>" method="post" class="d-inline">
                <?= csrf_field() ?>
                <input type="hidden" name="request_id" value="<?= esc($req['id']) ?>">
                <input type="hidden" name="status" value="rejected">
                <button type="submit" class="btn btn-outline-danger btn-sm px-3">Decline</button>
              </form>
            <?php else: ?>
              <span class="small text-muted fw-semibold">Actioned</span>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="text-center py-4 text-muted">
        No active creator applications received yet. Check back soon as creators apply to your published campaigns!
      </div>
    <?php endif; ?>
  </div>
</div>

<?= $this->endSection() ?>
