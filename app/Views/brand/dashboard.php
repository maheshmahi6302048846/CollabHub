<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<!-- GREETING & STATS -->
<div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
  <div>
    <h1 class="h2 fw-bold mb-1 text-dark">Welcome back, <?= esc(session()->get('name') ?? 'Brand Owner') ?>! 👋</h1>
    <p class="text-secondary mb-0">Here's an overview of your brand campaigns and influencer reach.</p>
  </div>
  
  <a href="<?= base_url('brand/campaigns/create') ?>" class="btn btn-primary btn-lg px-4 py-2 text-nowrap">
    + Create New Campaign
  </a>
</div>

<!-- STATS CARDS BOOTSTRAP 5 GRID -->
<div class="row g-3 mb-4">
  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <div class="small text-muted fw-semibold mb-1">Active Campaigns</div>
          <div class="h3 fw-bold text-dark mb-0">12</div>
          <span class="small text-success fw-semibold">+2 launched this week</span>
        </div>
        <div class="stat-icon stat-icon-purple rounded-3 p-2 bg-primary-subtle text-primary">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        </div>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <div class="small text-muted fw-semibold mb-1">Influencer Requests</div>
          <div class="h3 fw-bold text-dark mb-0">56</div>
          <span class="small text-warning fw-semibold">12 pending approval</span>
        </div>
        <div class="stat-icon stat-icon-amber rounded-3 p-2 bg-warning-subtle text-warning">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
        </div>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <div class="small text-muted fw-semibold mb-1">Active Collaborations</div>
          <div class="h3 fw-bold text-dark mb-0">24</div>
          <span class="small text-muted">Creators producing content</span>
        </div>
        <div class="stat-icon stat-icon-green rounded-3 p-2 bg-success-subtle text-success">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <div class="small text-muted fw-semibold mb-1">Total Spent</div>
          <div class="h3 fw-bold text-dark mb-0">₹1,25,000</div>
          <span class="small text-success fw-semibold">Est. ROI 3.8x</span>
        </div>
        <div class="stat-icon stat-icon-blue rounded-3 p-2 bg-info-subtle text-info">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MAIN DASHBOARD CONTENT GRID -->
<div class="row g-4">
  
  <!-- LEFT: CAMPAIGN PERFORMANCE CHART & REQUESTS -->
  <div class="col-12 col-lg-8">
    <!-- CHART CARD -->
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="h6 fw-bold mb-0">Campaign Reach &amp; Impressions</h3>
        <span class="small text-muted">Last 30 Days</span>
      </div>
      <div class="position-relative w-100" style="height:240px;">
        <canvas id="analyticsChart"></canvas>
      </div>
    </div>

    <!-- RECENT INFLUENCER REQUESTS -->
    <div class="card border-0 shadow-sm rounded-4 p-4">
      <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
        <h3 class="h6 fw-bold mb-0">Recent Influencer Applications</h3>
        <a href="<?= base_url('brand/requests') ?>" class="small fw-bold text-primary text-decoration-none">View All 56 Applications &rarr;</a>
      </div>

      <div class="d-flex flex-column gap-3">
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between pb-3 border-bottom gap-2">
          <div class="d-flex align-items-center gap-3">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:40px;height:40px;object-fit:cover;" alt="Priya">
            <div>
              <div class="fw-bold small text-dark mb-0">Priya Sharma <span class="fw-normal text-muted ms-1">@priyasharma_fit</span></div>
              <div class="small text-muted" style="font-size:0.75rem;">Fitness &bull; 185K Followers &bull; 8.4% Eng.</div>
            </div>
          </div>
          <div class="d-flex gap-2 ms-auto ms-sm-0">
            <button onclick="showToast('Application accepted!')" class="btn btn-primary btn-sm px-3">Accept</button>
            <button onclick="showToast('Application rejected')" class="btn btn-outline btn-sm px-3">Decline</button>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-2">
          <div class="d-flex align-items-center gap-3">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:40px;height:40px;object-fit:cover;" alt="Aarav">
            <div>
              <div class="fw-bold small text-dark mb-0">Aarav Patel <span class="fw-normal text-muted ms-1">@aarav_tech</span></div>
              <div class="small text-muted" style="font-size:0.75rem;">Tech &amp; Lifestyle &bull; 92K Followers &bull; 6.1% Eng.</div>
            </div>
          </div>
          <div class="d-flex gap-2 ms-auto ms-sm-0">
            <button onclick="showToast('Application accepted!')" class="btn btn-primary btn-sm px-3">Accept</button>
            <button onclick="showToast('Application rejected')" class="btn btn-outline btn-sm px-3">Decline</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- RIGHT: TOP PERFORMING CAMPAIGNS -->
  <div class="col-12 col-lg-4">
    <div class="card card-gradient border-0 shadow-sm rounded-4 p-4">
      <h3 class="h6 fw-bold mb-3">Top Performing Campaigns</h3>
      
      <div class="d-flex flex-column gap-3">
        <div class="bg-white p-3 rounded-3 border">
          <div class="d-flex justify-content-between align-items-center mb-1">
            <div class="fw-bold small text-dark">Weight Loss Awareness</div>
            <span class="badge badge-success">+245% ROI</span>
          </div>
          <div class="small text-muted" style="font-size:0.75rem;">1.2M Reach &bull; 8 Creators</div>
        </div>

        <div class="bg-white p-3 rounded-3 border">
          <div class="d-flex justify-content-between align-items-center mb-1">
            <div class="fw-bold small text-dark">Wellness Consultations</div>
            <span class="badge badge-success">+180% ROI</span>
          </div>
          <div class="small text-muted" style="font-size:0.75rem;">650K Reach &bull; 5 Creators</div>
        </div>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
