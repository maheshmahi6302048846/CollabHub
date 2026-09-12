<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
  <div>
    <h1 class="h2 fw-bold mb-1 text-dark">Brand Campaigns</h1>
    <p class="text-secondary mb-0">Manage active campaigns, budget allocation, and creator submissions.</p>
  </div>

  <a href="<?= base_url('brand/campaigns/create') ?>" class="btn btn-primary px-4 py-2 text-nowrap">+ Create Campaign</a>
</div>

<div class="card border-0 shadow-sm rounded-4 p-3 p-md-4 tab-container">
  <div class="d-flex flex-wrap gap-2 border-bottom pb-3 mb-4">
    <a href="#" class="btn btn-primary btn-sm tab-link active" data-tab="brandAllCamp">All (12)</a>
    <a href="#" class="btn btn-outline btn-sm tab-link" data-tab="brandActiveCamp">Active (8)</a>
    <a href="#" class="btn btn-outline btn-sm tab-link" data-tab="brandDraftCamp">Drafts (2)</a>
  </div>

  <!-- ALL CAMPAIGNS TAB -->
  <div id="brandAllCamp" class="tab-pane active">
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead>
          <tr class="text-secondary small">
            <th>Campaign Name</th>
            <th>Category</th>
            <th>Influencer Count</th>
            <th>Status</th>
            <th class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="fw-bold text-dark">Weight Loss Awareness Campaign</td>
            <td class="small text-secondary">Fitness &amp; Health</td>
            <td class="small text-secondary">8 / 10 Creators</td>
            <td><span class="badge badge-success">Active</span></td>
            <td class="text-end">
              <a href="<?= base_url('brand/requests') ?>" class="btn btn-outline btn-sm px-3">View Applicants</a>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">Summer Skincare Glow Promotion</td>
            <td class="small text-secondary">Beauty &amp; Lifestyle</td>
            <td class="small text-secondary">5 / 5 Creators</td>
            <td><span class="badge badge-success">Active</span></td>
            <td class="text-end">
              <a href="<?= base_url('brand/requests') ?>" class="btn btn-outline btn-sm px-3">View Applicants</a>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">Plant Protein Shake Launch</td>
            <td class="small text-secondary">Food &amp; Wellness</td>
            <td class="small text-secondary">0 / 8 Creators</td>
            <td><span class="badge badge-pending">Draft</span></td>
            <td class="text-end">
              <a href="<?= base_url('brand/campaigns/create') ?>" class="btn btn-outline btn-sm px-3">Edit Draft</a>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">Monsoon Immunity Booster Campaign</td>
            <td class="small text-secondary">Health &amp; Wellness</td>
            <td class="small text-secondary">0 / 6 Creators</td>
            <td><span class="badge badge-pending">Draft</span></td>
            <td class="text-end">
              <a href="<?= base_url('brand/campaigns/create') ?>" class="btn btn-outline btn-sm px-3">Edit Draft</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- ACTIVE CAMPAIGNS TAB -->
  <div id="brandActiveCamp" class="tab-pane">
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead>
          <tr class="text-secondary small">
            <th>Campaign Name</th>
            <th>Category</th>
            <th>Influencer Count</th>
            <th>Status</th>
            <th class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="fw-bold text-dark">Weight Loss Awareness Campaign</td>
            <td class="small text-secondary">Fitness &amp; Health</td>
            <td class="small text-secondary">8 / 10 Creators</td>
            <td><span class="badge badge-success">Active</span></td>
            <td class="text-end">
              <a href="<?= base_url('brand/requests') ?>" class="btn btn-outline btn-sm px-3">View Applicants</a>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">Summer Skincare Glow Promotion</td>
            <td class="small text-secondary">Beauty &amp; Lifestyle</td>
            <td class="small text-secondary">5 / 5 Creators</td>
            <td><span class="badge badge-success">Active</span></td>
            <td class="text-end">
              <a href="<?= base_url('brand/requests') ?>" class="btn btn-outline btn-sm px-3">View Applicants</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- DRAFT CAMPAIGNS TAB -->
  <div id="brandDraftCamp" class="tab-pane">
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead>
          <tr class="text-secondary small">
            <th>Campaign Name</th>
            <th>Category</th>
            <th>Influencer Count</th>
            <th>Status</th>
            <th class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="fw-bold text-dark">Plant Protein Shake Launch</td>
            <td class="small text-secondary">Food &amp; Wellness</td>
            <td class="small text-secondary">0 / 8 Creators</td>
            <td><span class="badge badge-pending">Draft</span></td>
            <td class="text-end">
              <a href="<?= base_url('brand/campaigns/create') ?>" class="btn btn-outline btn-sm px-3">Edit Draft</a>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">Monsoon Immunity Booster Campaign</td>
            <td class="small text-secondary">Health &amp; Wellness</td>
            <td class="small text-secondary">0 / 6 Creators</td>
            <td><span class="badge badge-pending">Draft</span></td>
            <td class="text-end">
              <a href="<?= base_url('brand/campaigns/create') ?>" class="btn btn-outline btn-sm px-3">Edit Draft</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
