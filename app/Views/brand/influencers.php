<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h2 fw-bold mb-1 text-dark">Find Influencers</h1>
  <p class="text-secondary mb-0">Search 10,000+ verified creators by niche, engagement rate, and audience metrics.</p>
</div>

<!-- SEARCH & FILTER BAR -->
<div class="card border-0 shadow-sm rounded-4 p-3 mb-4">
  <div class="row g-2">
    <div class="col-12 col-md-5">
      <input type="text" class="form-control" placeholder="Search creators by name, handle, category...">
    </div>
    <div class="col-6 col-md-2.5">
      <select class="form-select">
        <option>All Niches</option>
        <option selected>Fitness &amp; Health</option>
        <option>Beauty &amp; Fashion</option>
        <option>Food &amp; Travel</option>
      </select>
    </div>
    <div class="col-6 col-md-2.5">
      <select class="form-select">
        <option>Followers: 10K - 500K</option>
        <option>Nano (1K - 10K)</option>
        <option>Micro (10K - 100K)</option>
        <option>Macro (100K+)</option>
      </select>
    </div>
    <div class="col-12 col-md-2">
      <select class="form-select">
        <option>Min Engagement: 3%</option>
        <option>5%+</option>
        <option>8%+</option>
      </select>
    </div>
  </div>
</div>

<!-- CREATOR CARDS GRID -->
<div class="row g-4">
  
  <!-- CREATOR CARD 1 -->
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card card-interactive h-100 text-center p-4 border-0 shadow-sm rounded-4 d-flex flex-column">
      <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" class="avatar avatar-lg rounded-circle mx-auto mb-3" style="width:80px; height:80px; object-fit:cover;" alt="Priya">
      <h3 class="h5 fw-bold mb-1 text-dark">Priya Sharma <span class="text-primary fs-6">✓</span></h3>
      <div class="small text-muted mb-3">@priyasharma_fit &bull; Fitness &amp; Health</div>

      <div class="row g-2 bg-light p-3 rounded-3 mb-4 small">
        <div class="col-6">
          <div class="text-muted small" style="font-size:0.7rem;">Followers</div>
          <div class="fw-bold text-dark fs-6">185K</div>
        </div>
        <div class="col-6">
          <div class="text-muted small" style="font-size:0.7rem;">Engagement</div>
          <div class="fw-bold text-success fs-6">8.4%</div>
        </div>
      </div>

      <div class="d-flex gap-2 mt-auto">
        <a href="<?= base_url('brand/influencers/1') ?>" class="btn btn-outline btn-sm w-100">View Profile</a>
        <button onclick="showToast('Collaboration request sent to Priya Sharma!')" class="btn btn-primary btn-sm w-100">Send Request</button>
      </div>
    </div>
  </div>

  <!-- CREATOR CARD 2 -->
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card card-interactive h-100 text-center p-4 border-0 shadow-sm rounded-4 d-flex flex-column">
      <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80" class="avatar avatar-lg rounded-circle mx-auto mb-3" style="width:80px; height:80px; object-fit:cover;" alt="Aarav">
      <h3 class="h5 fw-bold mb-1 text-dark">Aarav Patel <span class="text-primary fs-6">✓</span></h3>
      <div class="small text-muted mb-3">@aarav_tech &bull; Tech &amp; Gadgets</div>

      <div class="row g-2 bg-light p-3 rounded-3 mb-4 small">
        <div class="col-6">
          <div class="text-muted small" style="font-size:0.7rem;">Followers</div>
          <div class="fw-bold text-dark fs-6">92K</div>
        </div>
        <div class="col-6">
          <div class="text-muted small" style="font-size:0.7rem;">Engagement</div>
          <div class="fw-bold text-success fs-6">6.1%</div>
        </div>
      </div>

      <div class="d-flex gap-2 mt-auto">
        <a href="<?= base_url('brand/influencers/2') ?>" class="btn btn-outline btn-sm w-100">View Profile</a>
        <button onclick="showToast('Collaboration request sent to Aarav Patel!')" class="btn btn-primary btn-sm w-100">Send Request</button>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
