<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<!-- GREETING & STATS -->
<div class="mb-4">
  <h1 class="h2 fw-bold mb-1 text-dark">Good morning, Priya 👋</h1>
  <p class="text-secondary mb-0">Here's what's happening with your creator account today.</p>
</div>

<!-- STATS CARDS BOOTSTRAP 5 GRID -->
<div class="row g-3 mb-4">
  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <div class="small text-muted fw-semibold mb-1">New Requests</div>
          <div class="h3 fw-bold text-dark mb-0">12</div>
          <span class="small text-success fw-semibold">+3 since yesterday</span>
        </div>
        <div class="stat-icon stat-icon-purple rounded-3 p-2 bg-primary-subtle text-primary">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
        </div>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <div class="small text-muted fw-semibold mb-1">Accepted</div>
          <div class="h3 fw-bold text-dark mb-0">8</div>
          <span class="small text-muted">Active campaigns</span>
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
          <div class="small text-muted fw-semibold mb-1">In Progress</div>
          <div class="h3 fw-bold text-dark mb-0">4</div>
          <span class="small text-warning fw-semibold">Content review</span>
        </div>
        <div class="stat-icon stat-icon-amber rounded-3 p-2 bg-warning-subtle text-warning">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 16 14"></polyline></svg>
        </div>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <div class="small text-muted fw-semibold mb-1">Total Earnings</div>
          <div class="h3 fw-bold text-dark mb-0">₹25,000</div>
          <span class="small text-success fw-semibold">Payout ready</span>
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
  
  <!-- LEFT: AVAILABLE OPPORTUNITIES -->
  <div class="col-12 col-lg-8">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="h5 fw-bold mb-0">Available Opportunities</h2>
      <a href="<?= base_url('creator/discover') ?>" class="fw-bold small text-primary text-decoration-none">View All &rarr;</a>
    </div>

    <div class="d-flex flex-column gap-3">
      
      <!-- OPPORTUNITY CARD 1 -->
      <div class="card card-interactive border-0 shadow-sm rounded-4 p-3 p-md-4">
        <div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
          <div class="d-flex align-items-center gap-3">
            <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=100&q=80" class="avatar avatar-lg rounded-circle" style="width:48px;height:48px;object-fit:cover;" alt="Reshe Clinic">
            <div>
              <h3 class="h6 fw-bold mb-0 text-dark">Weight Loss Awareness Campaign</h3>
              <div class="small text-muted">Reshe Clinic &bull; Fitness &amp; Health</div>
            </div>
          </div>
          <span class="badge badge-success">Free Service</span>
        </div>

        <p class="small text-secondary mb-3">
          Create content about healthy lifestyle and weight loss program. Includes VIP clinic treatment.
        </p>

        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center border-top pt-3 small gap-2">
          <div class="d-flex gap-3 text-muted flex-wrap">
            <span>📸 Instagram</span>
            <span>▶️ YouTube</span>
            <span>⏰ Apply by 25 Mar 2026</span>
          </div>
          <a href="<?= base_url('creator/discover/1') ?>" class="btn btn-primary btn-sm px-3">View Details</a>
        </div>
      </div>

      <!-- OPPORTUNITY CARD 2 -->
      <div class="card card-interactive border-0 shadow-sm rounded-4 p-3 p-md-4">
        <div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
          <div class="d-flex align-items-center gap-3">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" class="avatar avatar-lg rounded-circle" style="width:48px;height:48px;object-fit:cover;" alt="FitLife">
            <div>
              <h3 class="h6 fw-bold mb-0 text-dark">Protein Supplement Promotion</h3>
              <div class="small text-muted">FitLife Nutrition &bull; Health &amp; Wellness</div>
            </div>
          </div>
          <span class="badge badge-info">Free Product</span>
        </div>

        <p class="small text-secondary mb-3">
          Promote our new plant-based organic protein supplement range to your fitness audience.
        </p>

        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center border-top pt-3 small gap-2">
          <div class="d-flex gap-3 text-muted flex-wrap">
            <span>📸 Instagram</span>
            <span>🎵 TikTok</span>
            <span>⏰ Apply by 28 Mar 2026</span>
          </div>
          <a href="<?= base_url('creator/discover/2') ?>" class="btn btn-primary btn-sm px-3">View Details</a>
        </div>
      </div>

      <!-- OPPORTUNITY CARD 3 -->
      <div class="card card-interactive border-0 shadow-sm rounded-4 p-3 p-md-4">
        <div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
          <div class="d-flex align-items-center gap-3">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=100&q=80" class="avatar avatar-lg rounded-circle" style="width:48px;height:48px;object-fit:cover;" alt="UrbanStyle">
            <div>
              <h3 class="h6 fw-bold mb-0 text-dark">Summer Collection Showcase</h3>
              <div class="small text-muted">UrbanStyle &bull; Apparel</div>
            </div>
          </div>
          <span class="badge badge-primary">Paid Service</span>
        </div>

        <p class="small text-secondary mb-3">
          Create a reel featuring our summer collection. ₹20,000 monetary compensation + 3 free outfits.
        </p>

        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center border-top pt-3 small gap-2">
          <div class="d-flex gap-3 text-muted flex-wrap">
            <span>📸 Instagram</span>
            <span>🎵 TikTok</span>
            <span>⏰ Apply by 30 Mar 2026</span>
          </div>
          <a href="<?= base_url('creator/discover/3') ?>" class="btn btn-primary btn-sm px-3">View Details</a>
        </div>
      </div>

    </div>
  </div>

  <!-- RIGHT: RECENT MESSAGES & STATS SUMMARY -->
  <div class="col-12 col-lg-4">
    <div class="card border-0 shadow-sm rounded-4 p-3 p-md-4 mb-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="h6 fw-bold mb-0">Recent Messages</h3>
        <a href="<?= base_url('creator/messages') ?>" class="small text-primary fw-bold text-decoration-none">View All</a>
      </div>

      <div class="d-flex flex-column gap-3">
        <div class="d-flex align-items-center gap-2 pb-2 border-bottom">
          <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:36px;height:36px;object-fit:cover;" alt="Brand">
          <div class="flex-grow-1 overflow-hidden">
            <div class="fw-bold small text-dark mb-0">Reshe Clinic</div>
            <div class="small text-muted text-truncate">We reviewed your reel draft!</div>
          </div>
          <span class="small text-muted">10m</span>
        </div>

        <div class="d-flex align-items-center gap-2">
          <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" style="width:36px;height:36px;object-fit:cover;" alt="Brand">
          <div class="flex-grow-1 overflow-hidden">
            <div class="fw-bold small text-dark mb-0">FitLife Nutrition</div>
            <div class="small text-muted text-truncate">Payment disbursed to account</div>
          </div>
          <span class="small text-muted">2h</span>
        </div>
      </div>
    </div>

    <!-- EARNINGS SUMMARY WIDGET -->
    <div class="card card-gradient border-0 shadow-sm rounded-4 p-4">
      <h3 class="h6 fw-bold mb-1">March Earnings</h3>
      <div class="display-6 fw-extrabold text-primary mb-1">₹25,000</div>
      <p class="small text-secondary mb-3">Next automatic payout on 15th March</p>
      <a href="<?= base_url('creator/earnings') ?>" class="btn btn-outline btn-sm w-100">View Payment Settings</a>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
