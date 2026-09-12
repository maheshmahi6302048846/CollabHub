<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="mb-4">
  <h1 class="h2 fw-bold mb-1 text-dark">Discover Opportunities</h1>
  <p class="text-secondary mb-0">Browse and apply to brand campaigns matching your profile.</p>
</div>

<!-- SEARCH & FILTER TOOLBAR -->
<div class="card border-0 shadow-sm rounded-4 p-3 mb-4">
  <div class="row g-2">
    <div class="col-12 col-md-5">
      <input type="text" class="form-control" placeholder="Search campaigns, brands..." onkeyup="filterMarketplaceCards(this.value, document.getElementById('creatorCategoryFilter').value)">
    </div>
    <div class="col-6 col-md-2.5">
      <select id="creatorCategoryFilter" class="form-select" onchange="filterMarketplaceCards('', this.value)">
        <option value="all">All Categories</option>
        <option value="Fitness &amp; Health">Fitness &amp; Health</option>
        <option value="Beauty &amp; Fashion">Beauty &amp; Fashion</option>
        <option value="Food &amp; Beverage">Food &amp; Beverage</option>
      </select>
    </div>
    <div class="col-6 col-md-2.5">
      <select class="form-select">
        <option>All Types</option>
        <option>Free Product</option>
        <option>Free Service</option>
        <option>Paid Service</option>
      </select>
    </div>
    <div class="col-12 col-md-2">
      <select class="form-select">
        <option>Platform: All</option>
        <option>Instagram</option>
        <option>YouTube</option>
        <option>TikTok</option>
      </select>
    </div>
  </div>
</div>

<!-- GRID OF DEALS -->
<div class="row g-4">
  
  <div class="col-12 col-md-6 col-lg-4 marketplace-card" data-title="Weight Loss Awareness Campaign" data-category="Fitness &amp; Health">
    <div class="card card-interactive h-100 border-0 shadow-sm rounded-4 p-4 d-flex flex-column">
      <div class="d-flex justify-content-between align-items-start mb-3">
        <span class="badge badge-success">Free Service</span>
        <span class="small text-muted">Posted 2h ago</span>
      </div>
      <h3 class="h5 fw-bold mb-1 text-dark">Weight Loss Awareness Campaign</h3>
      <p class="small text-secondary mb-3">Reshe Clinic &bull; Body transformation &amp; wellness consultation</p>
      <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-auto">
        <span class="fw-bold text-primary">Free Treatment</span>
        <button onclick="showToast('Application pitch submitted to Reshe Clinic!')" class="btn btn-primary btn-sm px-3">I'm Interested</button>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-4 marketplace-card" data-title="Protein Supplement Promotion" data-category="Fitness &amp; Health">
    <div class="card card-interactive h-100 border-0 shadow-sm rounded-4 p-4 d-flex flex-column">
      <div class="d-flex justify-content-between align-items-start mb-3">
        <span class="badge badge-info">Free Product</span>
        <span class="small text-muted">Posted 5h ago</span>
      </div>
      <h3 class="h5 fw-bold mb-1 text-dark">Protein Supplement Promotion</h3>
      <p class="small text-secondary mb-3">FitLife Nutrition &bull; Organic plant protein package</p>
      <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-auto">
        <span class="fw-bold text-primary">Product Kit</span>
        <button onclick="showToast('Application pitch submitted to FitLife!')" class="btn btn-primary btn-sm px-3">I'm Interested</button>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-4 marketplace-card" data-title="Summer Collection Showcase" data-category="Beauty &amp; Fashion">
    <div class="card card-interactive h-100 border-0 shadow-sm rounded-4 p-4 d-flex flex-column">
      <div class="d-flex justify-content-between align-items-start mb-3">
        <span class="badge badge-primary">Paid Service</span>
        <span class="small text-muted">Posted 1d ago</span>
      </div>
      <h3 class="h5 fw-bold mb-1 text-dark">Summer Collection Showcase</h3>
      <p class="small text-secondary mb-3">UrbanStyle &bull; Streetwear reel showcase</p>
      <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-auto">
        <span class="fw-bold text-success">₹20,000</span>
        <button onclick="showToast('Application pitch submitted to UrbanStyle!')" class="btn btn-primary btn-sm px-3">I'm Interested</button>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
