<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section class="py-4 py-lg-5" style="background: linear-gradient(135deg, #FAF8FF 0%, #F3E8FF 100%);">
  <div class="container py-2">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-12 col-lg-6">
        <span class="badge badge-primary mb-3">FOR INFLUENCERS &amp; CREATORS</span>
        <h1 class="display-4 fw-extrabold mb-3 text-dark lh-sm">
          Find brands.<br>
          <span style="color:var(--primary-600);">Create content.</span><br>
          Get paid.
        </h1>
        <p class="lead text-secondary mb-4">
          Turn your influence into real opportunities. Collaborate with leading brands, receive free products and experience packages, or secure top-tier paid sponsorships.
        </p>
        <a href="<?= base_url('register?type=creator') ?>" class="btn btn-primary btn-lg px-4 py-3 w-100 w-sm-auto">
          Create Creator Profile &rarr;
        </a>
      </div>
      <div class="col-12 col-lg-6">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=700&q=80" alt="Creator Studio" class="img-fluid rounded-4 shadow-lg">
      </div>
    </div>
  </div>
</section>

<!-- BENEFITS GRID -->
<section class="py-5">
  <div class="container py-3">
    <div class="text-center mx-auto mb-5" style="max-width:600px;">
      <h2 class="display-6 fw-bold mb-2">Why Creators Love CollabHub</h2>
      <p class="text-secondary lead">Everything you need to turn your passion into a thriving business.</p>
    </div>

    <div class="row g-4">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
          <div class="fs-2 mb-3">🎯</div>
          <h3 class="h5 fw-bold mb-2">Discover Relevant Deals</h3>
          <p class="small text-secondary mb-0">Filter opportunities tailored to your specific niche, audience size, and platform preferences.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
          <div class="fs-2 mb-3">🎁</div>
          <h3 class="h5 fw-bold mb-2">Free Product &amp; Services</h3>
          <p class="small text-secondary mb-0">Receive exclusive product drops, spa treatments, resort stays, and premium dining experiences.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
          <div class="fs-2 mb-3">💵</div>
          <h3 class="h5 fw-bold mb-2">Guaranteed Paid Campaigns</h3>
          <p class="small text-secondary mb-0">Set your monetary rates for Reels, TikToks, and YouTube videos with escrow payment security.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
          <div class="fs-2 mb-3">💬</div>
          <h3 class="h5 fw-bold mb-2">Direct Brand Messaging</h3>
          <p class="small text-secondary mb-0">Communicate directly with campaign managers, share script drafts, and get fast approvals.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
          <div class="fs-2 mb-3">📊</div>
          <h3 class="h5 fw-bold mb-2">Financial Earnings Hub</h3>
          <p class="small text-secondary mb-0">Track pending and completed payouts with automated invoices and detailed monthly stats.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
          <div class="fs-2 mb-3">⭐</div>
          <h3 class="h5 fw-bold mb-2">Media Kit &amp; Portfolio</h3>
          <p class="small text-secondary mb-0">Showcase your verified follower metrics, engagement rate, and previous successful campaigns.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
