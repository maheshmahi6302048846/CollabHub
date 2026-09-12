<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-light text-center">
  <div class="container py-2">
    <span class="badge badge-success mb-2">PROVEN IMPACT</span>
    <h1 class="display-5 fw-bold mb-3">Creator &amp; Brand Success Stories</h1>
    <p class="lead text-secondary mx-auto" style="max-width:600px;">
      Real ROI numbers, authentic creator collaborations, and viral marketing metrics powered by CollabHub.
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container py-2">
    <div class="row g-4">
      <div class="col-12 col-lg-6">
        <div class="card card-gradient h-100 p-4 border-0 shadow-sm rounded-4">
          <span class="badge badge-primary me-auto mb-3">Fitness Niche Case Study</span>
          <h3 class="h4 fw-bold mb-2">FitLife Nutrition x Priya Sharma</h3>
          <div class="display-6 fw-extrabold text-success mb-3">+245% Campaign ROI</div>
          <p class="text-secondary mb-4">
            By pairing FitLife's organic protein rollout with 12 micro-creators, FitLife generated over 1.2M video views and ₹850,000 in direct website sales.
          </p>
          <div class="d-flex justify-content-between align-items-center small border-top pt-3 text-secondary mt-auto">
            <span>Reach: <strong>1.2M Views</strong></span>
            <span>Conversion: <strong>4.8%</strong></span>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="card card-gradient h-100 p-4 border-0 shadow-sm rounded-4">
          <span class="badge badge-info me-auto mb-3">Beauty Brand Case Study</span>
          <h3 class="h4 fw-bold mb-2">UrbanStyle Apparel x 25 Creators</h3>
          <div class="display-6 fw-extrabold text-primary mb-3">3.4M Impressions</div>
          <p class="text-secondary mb-4">
            UrbanStyle launched their summer collection with automated creator sampling, resulting in trending Instagram Reels and complete inventory sellout in 5 days.
          </p>
          <div class="d-flex justify-content-between align-items-center small border-top pt-3 text-secondary mt-auto">
            <span>Creators: <strong>25 Active</strong></span>
            <span>Sellout Time: <strong>5 Days</strong></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
