<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h3 fw-bold text-dark mb-1">Collaboration Requests</h1>
  <p class="text-muted mb-0">Review applicant creator proposals and send official campaign invitations.</p>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="h5 fw-bold text-dark mb-0">Pending Applications (12)</h3>
  </div>

  <div class="d-flex flex-column gap-3">
    
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between p-3 bg-light rounded-3 border gap-3">
      <div class="d-flex align-items-center gap-3">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" class="avatar avatar-lg">
        <div>
          <div class="fw-bold text-dark fs-6">Priya Sharma <span class="badge badge-primary ms-1">Verified</span></div>
          <div class="small text-muted">Applied to <strong>Weight Loss Awareness Campaign</strong></div>
          <div class="small text-muted mt-1">"I'd love to produce a 60s Reel documenting my consultation experience!"</div>
        </div>
      </div>

      <div class="d-flex gap-2 align-items-center flex-wrap">
        <a href="<?= base_url('brand/messages') ?>" class="btn btn-outline btn-sm">Chat</a>
        <button onclick="showToast('Accepted Priya Sharma for Weight Loss Campaign!')" class="btn btn-primary btn-sm">Accept Request</button>
        <button onclick="showToast('Application declined')" class="btn btn-light btn-sm text-danger">Decline</button>
      </div>
    </div>

  </div>
</div>

<?= $this->endSection() ?>
