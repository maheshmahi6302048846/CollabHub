<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h3 fw-bold text-dark mb-1">Brand Settings</h1>
  <p class="text-muted mb-0">Team members, business notifications, and account credentials.</p>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4 tab-container">
  <div class="d-flex flex-wrap gap-2 border-bottom pb-3 mb-4">
    <a href="#" class="btn btn-primary btn-sm tab-link active" data-tab="bSetBusiness">Business Info</a>
    <a href="#" class="btn btn-outline btn-sm tab-link" data-tab="bSetTeam">Team Members</a>
  </div>

  <div id="bSetBusiness" class="tab-pane active">
    <form onsubmit="event.preventDefault(); showToast('Business settings saved!');">
      <div class="mb-3">
        <label class="form-label fw-bold small text-dark">Business Name</label>
        <input type="text" class="form-control" value="Reshe Clinic">
      </div>
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
  </div>

  <div id="bSetTeam" class="tab-pane" style="display:none;">
    <p class="text-muted small mb-3">Invite team members to manage brand campaigns.</p>
    <button onclick="showToast('Invitation sent to team member!')" class="btn btn-outline btn-sm">+ Invite Team Member</button>
  </div>
</div>

<?= $this->endSection() ?>
