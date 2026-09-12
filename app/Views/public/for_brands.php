<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section class="py-4 py-lg-5 bg-dark text-white" style="background: linear-gradient(135deg, #0F172A 0%, #1E1B4B 100%) !important;">
  <div class="container py-2">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-12 col-lg-6">
        <span class="badge bg-secondary text-white mb-3">FOR BRANDS &amp; BUSINESSES</span>
        <h1 class="display-4 fw-extrabold mb-3 text-white lh-sm">
          Find the right influencers for your <span style="color:var(--primary-400);">next campaign.</span>
        </h1>
        <p class="lead text-light opacity-75 mb-4">
          Discover creators. Launch campaigns. Measure real business results and ROI with end-to-end campaign automation.
        </p>
        <div class="d-flex flex-column flex-sm-row gap-3">
          <a href="<?= base_url('register?type=brand') ?>" class="btn btn-primary btn-lg px-4 py-3">
            Create Brand Account &rarr;
          </a>
          <a href="<?= base_url('brand/influencers') ?>" class="btn btn-light btn-lg px-4 py-3">
            Find Influencers
          </a>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=700&q=80" alt="Brand Dashboard" class="img-fluid rounded-4 shadow-lg">
      </div>
    </div>
  </div>
</section>

<!-- BRAND CAPABILITIES -->
<section class="py-5">
  <div class="container py-3">
    <div class="text-center mx-auto mb-5" style="max-width:650px;">
      <h2 class="display-6 fw-bold mb-2">Scale your Influencer Marketing</h2>
      <p class="text-secondary lead">Powerful tools designed to deliver high conversion, reach, and authentic content.</p>
    </div>

    <div class="row g-4">
      <div class="col-12 col-md-4">
        <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
          <h3 class="h5 fw-bold mb-3">1. Multi-Step Campaign Setup</h3>
          <p class="small text-secondary mb-0">Define target follower ranges, preferred platforms (Reels, TikTok, YouTube Shorts), and explicit deliverable guidelines.</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
          <h3 class="h5 fw-bold mb-3">2. Influencer Discovery Marketplace</h3>
          <p class="small text-secondary mb-0">Filter by niche, audience demographics, engagement rate, and location to find exact creator matches.</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
          <h3 class="h5 fw-bold mb-3">3. Real-Time ROI Analytics</h3>
          <p class="small text-secondary mb-0">Track total reach, impressions, engagement rates, click-through conversions, and campaign spend in one sleek dashboard.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
