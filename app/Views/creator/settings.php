<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h3 fw-bold text-dark mb-1">Account & Profile Settings</h1>
  <p class="text-muted mb-0">Manage your security credentials, payment bank details, and notification preferences.</p>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4 tab-container">
  <div class="d-flex flex-wrap gap-2 border-bottom pb-3 mb-4">
    <a href="#" class="btn btn-primary btn-sm tab-link active" data-tab="setProfile">Profile Details</a>
    <a href="#" class="btn btn-outline btn-sm tab-link" data-tab="setBank">Bank & Payouts</a>
    <a href="#" class="btn btn-outline btn-sm tab-link" data-tab="setSecurity">Security & 2FA</a>
  </div>

  <div id="setProfile" class="tab-pane active">
    <form onsubmit="event.preventDefault(); showToast('Profile settings saved successfully!');">
      <div class="row g-3 mb-3">
        <div class="col-12 col-md-6">
          <label class="form-label fw-bold small text-dark">Full Name</label>
          <input type="text" class="form-control" value="Priya Sharma">
        </div>
        <div class="col-12 col-md-6">
          <label class="form-label fw-bold small text-dark">Instagram Handle</label>
          <input type="text" class="form-control" value="@priyasharma_fit">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
  </div>

  <div id="setBank" class="tab-pane" style="display:none;">
    <form onsubmit="event.preventDefault(); showToast('Bank details updated successfully!');">
      <div class="row g-3 mb-3">
        <div class="col-12 col-md-6">
          <label class="form-label fw-bold small text-dark">Bank Name</label>
          <input type="text" class="form-control" value="HDFC Bank">
        </div>
        <div class="col-12 col-md-6">
          <label class="form-label fw-bold small text-dark">Account Number</label>
          <input type="password" class="form-control" value="••••••••5892">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Update Bank Account</button>
    </form>
  </div>

  <div id="setSecurity" class="tab-pane" style="display:none;">
    <form onsubmit="event.preventDefault(); showToast('Password updated!');">
      <div class="row g-3 mb-3">
        <div class="col-12 col-md-6">
          <label class="form-label fw-bold small text-dark">Current Password</label>
          <input type="password" class="form-control" placeholder="••••••••">
        </div>
        <div class="col-12 col-md-6">
          <label class="form-label fw-bold small text-dark">New Password</label>
          <input type="password" class="form-control" placeholder="••••••••">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
