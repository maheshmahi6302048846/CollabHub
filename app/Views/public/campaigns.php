<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-4 bg-light border-bottom">
  <div class="container py-2">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
      <div>
        <h1 class="h2 fw-bold mb-1">Campaign Marketplace</h1>
        <p class="text-secondary mb-0">Browse live collaboration opportunities from verified brands.</p>
      </div>

      <div class="d-flex flex-wrap gap-2 w-100 w-sm-auto">
        <input type="text" id="publicSearchInput" class="form-control" placeholder="Search campaigns..." style="min-width:200px;" onkeyup="filterMarketplaceCards(this.value, document.getElementById('publicCategorySelect').value)">
        <select id="publicCategorySelect" class="form-select" style="min-width:160px;" onchange="filterMarketplaceCards(document.getElementById('publicSearchInput').value, this.value)">
          <option value="all">All Categories</option>
          <option value="Beauty &amp; Fashion">Beauty &amp; Fashion</option>
          <option value="Fitness &amp; Health">Fitness &amp; Health</option>
          <option value="Food &amp; Beverage">Food &amp; Beverage</option>
          <option value="Tech &amp; Gadgets">Tech &amp; Gadgets</option>
        </select>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container py-2">
    <div class="row g-4" id="marketplaceGrid">

      <!-- CAMPAIGN CARD 1 -->
      <div class="col-12 col-md-6 col-lg-4 marketplace-card" data-title="Weight Loss Awareness Campaign" data-category="Fitness &amp; Health">
        <div class="card card-interactive h-100 border-0 shadow-sm rounded-4 overflow-hidden">
          <div class="position-relative" style="height:180px;">
            <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=600&q=80" alt="Campaign" class="w-100 h-100 object-fit-cover">
            <span class="badge badge-success position-absolute top-0 end-0 m-3">Free Service</span>
          </div>

          <div class="card-body p-4 d-flex flex-column">
            <div class="d-flex align-items-center gap-2 mb-3">
              <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" alt="Brand" style="width:36px;height:36px;object-fit:cover;">
              <div>
                <div class="fw-bold small text-dark mb-0">Reshe Clinic</div>
                <div class="small text-muted" style="font-size:0.75rem;">Fitness &amp; Health</div>
              </div>
            </div>

            <h3 class="h5 fw-bold mb-2">Weight Loss Awareness Campaign</h3>
            <p class="small text-secondary mb-3" style="display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;">
              Create engaging content about healthy lifestyle changes and our customized weight loss consultation program.
            </p>

            <div class="d-flex gap-1 flex-wrap mb-4">
              <span class="badge badge-primary">Instagram</span>
              <span class="badge badge-primary">YouTube</span>
              <span class="small text-muted align-self-center ms-1">&bull; 5 Influencers needed</span>
            </div>

            <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-auto">
              <div>
                <div class="small text-uppercase text-muted fw-bold" style="font-size:0.7rem;">Compensation</div>
                <div class="fw-bold text-primary fs-6">Free Service + Perks</div>
              </div>
              <a href="<?= base_url('campaigns/1') ?>" class="btn btn-primary btn-sm px-3">View Details</a>
            </div>
          </div>
        </div>
      </div>

      <!-- CAMPAIGN CARD 2 -->
      <div class="col-12 col-md-6 col-lg-4 marketplace-card" data-title="Protein Supplement Promotion" data-category="Fitness &amp; Health">
        <div class="card card-interactive h-100 border-0 shadow-sm rounded-4 overflow-hidden">
          <div class="position-relative" style="height:180px;">
            <img src="https://images.unsplash.com/photo-1579722821273-0f6c7d44362f?auto=format&fit=crop&w=600&q=80" alt="Campaign" class="w-100 h-100 object-fit-cover">
            <span class="badge badge-info position-absolute top-0 end-0 m-3">Free Product</span>
          </div>

          <div class="card-body p-4 d-flex flex-column">
            <div class="d-flex align-items-center gap-2 mb-3">
              <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" alt="Brand" style="width:36px;height:36px;object-fit:cover;">
              <div>
                <div class="fw-bold small text-dark mb-0">FitLife Nutrition</div>
                <div class="small text-muted" style="font-size:0.75rem;">Health &amp; Wellness</div>
              </div>
            </div>

            <h3 class="h5 fw-bold mb-2">Protein Supplement Promotion</h3>
            <p class="small text-secondary mb-3" style="display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;">
              Promote our new plant-based organic protein range with honest video reviews and workout unboxing.
            </p>

            <div class="d-flex gap-1 flex-wrap mb-4">
              <span class="badge badge-primary">Instagram</span>
              <span class="badge badge-primary">TikTok</span>
            </div>

            <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-auto">
              <div>
                <div class="small text-uppercase text-muted fw-bold" style="font-size:0.7rem;">Compensation</div>
                <div class="fw-bold text-primary fs-6">Product Kit (₹5,000)</div>
              </div>
              <a href="<?= base_url('campaigns/2') ?>" class="btn btn-primary btn-sm px-3">View Details</a>
            </div>
          </div>
        </div>
      </div>

      <!-- CAMPAIGN CARD 3 -->
      <div class="col-12 col-md-6 col-lg-4 marketplace-card" data-title="Summer Collection Showcase" data-category="Beauty &amp; Fashion">
        <div class="card card-interactive h-100 border-0 shadow-sm rounded-4 overflow-hidden">
          <div class="position-relative" style="height:180px;">
            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=600&q=80" alt="Campaign" class="w-100 h-100 object-fit-cover">
            <span class="badge badge-primary position-absolute top-0 end-0 m-3">Paid Service</span>
          </div>

          <div class="card-body p-4 d-flex flex-column">
            <div class="d-flex align-items-center gap-2 mb-3">
              <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm rounded-circle" alt="Brand" style="width:36px;height:36px;object-fit:cover;">
              <div>
                <div class="fw-bold small text-dark mb-0">UrbanStyle Fashion</div>
                <div class="small text-muted" style="font-size:0.75rem;">Apparel</div>
              </div>
            </div>

            <h3 class="h5 fw-bold mb-2">Summer Collection Showcase</h3>
            <p class="small text-secondary mb-3" style="display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;">
              Create a vibrant 30-second Reel featuring 3 outfits from our new streetwear summer lineup.
            </p>

            <div class="d-flex gap-1 flex-wrap mb-4">
              <span class="badge badge-primary">Instagram Reels</span>
            </div>

            <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-auto">
              <div>
                <div class="small text-uppercase text-muted fw-bold" style="font-size:0.7rem;">Compensation</div>
                <div class="fw-bold text-success fs-6">₹20,000 + Outfits</div>
              </div>
              <a href="<?= base_url('campaigns/3') ?>" class="btn btn-primary btn-sm px-3">View Details</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?= $this->endSection() ?>
