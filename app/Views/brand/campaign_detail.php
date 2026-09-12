<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="mb-4 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
  <div>
    <a href="<?= base_url('brand/campaigns') ?>" class="text-decoration-none text-muted small fw-semibold mb-2 d-inline-flex align-items-center gap-1">
      &larr; Back to Campaigns
    </a>
    <h1 class="h2 fw-bold text-dark mb-1">Weight Loss Awareness Campaign</h1>
    <span class="badge badge-success">Active Campaign</span>
  </div>

  <div class="d-flex gap-2">
    <a href="<?= base_url('brand/campaigns/create') ?>" class="btn btn-outline px-3">Edit Campaign</a>
    <a href="<?= base_url('brand/requests') ?>" class="btn btn-primary px-3">Manage Applicants (12)</a>
  </div>
</div>

<div class="row g-4">
  <!-- STATS -->
  <div class="col-12 col-md-4">
    <div class="stat-card">
      <div>
        <div class="stat-label">Creators Hired</div>
        <div class="stat-value">8 / 10</div>
      </div>
      <div class="stat-icon stat-icon-purple">👥</div>
    </div>
  </div>

  <div class="col-12 col-md-4">
    <div class="stat-card">
      <div>
        <div class="stat-label">Total Impressions</div>
        <div class="stat-value">482.5K</div>
      </div>
      <div class="stat-icon stat-icon-green">📈</div>
    </div>
  </div>

  <div class="col-12 col-md-4">
    <div class="stat-card">
      <div>
        <div class="stat-label">Budget Allocated</div>
        <div class="stat-value">₹45,000</div>
      </div>
      <div class="stat-icon stat-icon-amber">💰</div>
    </div>
  </div>

  <!-- PARTICIPATING CREATORS -->
  <div class="col-12">
    <div class="card border-0 shadow-sm rounded-4 p-4">
      <h3 class="h5 fw-bold text-dark mb-3">Participating Creators</h3>
      <div class="table-responsive">
        <table class="table align-middle mb-0">
          <thead>
            <tr class="text-secondary small">
              <th>Creator</th>
              <th>Platform</th>
              <th>Deliverable Status</th>
              <th>Reach</th>
              <th class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:36px;height:36px;object-fit:cover;" alt="Priya">
                  <div>
                    <div class="fw-bold text-dark small mb-0">Priya Sharma</div>
                    <div class="small text-muted" style="font-size:0.75rem;">@priyasharma_fit</div>
                  </div>
                </div>
              </td>
              <td><span class="badge badge-primary">Instagram Reel</span></td>
              <td><span class="badge badge-success">Completed</span></td>
              <td class="small fw-semibold text-dark">185.4K Views</td>
              <td class="text-end">
                <a href="<?= base_url('brand/messages') ?>" class="btn btn-outline btn-sm">Chat</a>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:36px;height:36px;object-fit:cover;" alt="Aarav">
                  <div>
                    <div class="fw-bold text-dark small mb-0">Aarav Patel</div>
                    <div class="small text-muted" style="font-size:0.75rem;">@aarav_tech</div>
                  </div>
                </div>
              </td>
              <td><span class="badge badge-info">YouTube Video</span></td>
              <td><span class="badge badge-pending">In Progress</span></td>
              <td class="small fw-semibold text-dark">Pending Upload</td>
              <td class="text-end">
                <a href="<?= base_url('brand/messages') ?>" class="btn btn-outline btn-sm">Chat</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
