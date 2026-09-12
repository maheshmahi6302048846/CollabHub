<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-light text-center">
  <div class="container py-2">
    <span class="badge badge-primary mb-2">COLLABHUB RESOURCES &amp; INSIGHTS</span>
    <h1 class="display-5 fw-bold mb-3">Creator &amp; Brand Marketing Blog</h1>
    <p class="lead text-secondary mx-auto" style="max-width:600px;">
      Actionable guides, industry trends, engagement strategies, and monetization tips.
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container py-2">
    <div class="row g-4">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-interactive h-100 p-4 border-0 shadow-sm rounded-4">
          <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3 mb-3 object-fit-cover" style="height:180px; width:100%;" alt="Blog 1">
          <span class="badge badge-primary me-auto mb-2">Creator Growth</span>
          <h3 class="h5 fw-bold mb-2">How to Pitch Brands as a Micro-Influencer in 2026</h3>
          <p class="small text-secondary mb-3">Learn how to craft high-converting collaboration proposals that get accepted fast.</p>
          <span class="small text-muted mt-auto">5 min read &bull; 10 Sep 2026</span>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-interactive h-100 p-4 border-0 shadow-sm rounded-4">
          <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3 mb-3 object-fit-cover" style="height:180px; width:100%;" alt="Blog 2">
          <span class="badge badge-info me-auto mb-2">Brand Strategy</span>
          <h3 class="h5 fw-bold mb-2">Calculating True ROI on Instagram Reel Campaigns</h3>
          <p class="small text-secondary mb-3">A complete breakdown of metrics that matter: impressions, saves, and link attribution.</p>
          <span class="small text-muted mt-auto">7 min read &bull; 08 Sep 2026</span>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-interactive h-100 p-4 border-0 shadow-sm rounded-4">
          <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3 mb-3 object-fit-cover" style="height:180px; width:100%;" alt="Blog 3">
          <span class="badge badge-success me-auto mb-2">Case Study</span>
          <h3 class="h5 fw-bold mb-2">Why Product Seeding Outperforms Paid Ads for D2C</h3>
          <p class="small text-secondary mb-3">How gifting free treatments and product kits drives organic social proof.</p>
          <span class="small text-muted mt-auto">4 min read &bull; 02 Sep 2026</span>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
