<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="mb-4 d-flex align-items-center justify-content-between">
  <div>
    <a href="<?= base_url('brand/influencers') ?>" class="text-decoration-none text-muted small fw-semibold mb-2 d-inline-flex align-items-center gap-1">
      &larr; Back to Creators
    </a>
    <h1 class="h2 fw-bold text-dark mb-0">Priya Sharma</h1>
    <p class="text-secondary small mb-0">@priyasharma_fit &bull; Verified Fitness &amp; Lifestyle Influencer</p>
  </div>
  <button onclick="showToast('Invitation sent to Priya Sharma!')" class="btn btn-primary px-4 py-2">+ Invite to Campaign</button>
</div>

<div class="row g-4">
  <!-- LEFT COLUMN - PROFILE CARD & METRICS -->
  <div class="col-12 col-lg-4">
    <div class="card border-0 shadow-sm rounded-4 p-4 text-center mb-4">
      <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=300&q=80" class="avatar avatar-xl rounded-circle mx-auto mb-3" style="width:110px; height:110px; object-fit:cover;" alt="Priya Sharma">
      <h3 class="h5 fw-bold text-dark mb-1">Priya Sharma <span class="text-primary">✓</span></h3>
      <div class="badge badge-primary mb-3">Top 1% Engagement</div>
      <p class="text-muted small mb-4">Certified fitness coach and lifestyle content creator based in Mumbai. Specializing in high-converting Instagram Reels &amp; YouTube Shorts.</p>

      <div class="row g-2 text-center bg-light p-3 rounded-3 mb-3">
        <div class="col-6">
          <div class="text-muted small">Total Followers</div>
          <div class="fw-bold fs-5 text-dark">185,000</div>
        </div>
        <div class="col-6">
          <div class="text-muted small">Engagement Rate</div>
          <div class="fw-bold fs-5 text-success">8.4%</div>
        </div>
      </div>

      <div class="d-flex justify-content-center gap-2">
        <a href="https://instagram.com" target="_blank" class="btn btn-outline btn-sm w-100">Instagram</a>
        <a href="https://youtube.com" target="_blank" class="btn btn-outline btn-sm w-100">YouTube</a>
      </div>
    </div>
  </div>

  <!-- RIGHT COLUMN - AUDIENCE METRICS & RECENT POSTS -->
  <div class="col-12 col-lg-8">
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
      <h4 class="h5 fw-bold text-dark mb-3">Audience Demographics</h4>
      <div class="row g-3 text-center">
        <div class="col-4">
          <div class="border rounded-3 p-3 bg-light">
            <div class="text-muted small">Top Gender</div>
            <div class="fw-bold text-dark fs-6 mt-1">68% Female</div>
          </div>
        </div>
        <div class="col-4">
          <div class="border rounded-3 p-3 bg-light">
            <div class="text-muted small">Primary Age</div>
            <div class="fw-bold text-dark fs-6 mt-1">18 - 34 Yrs</div>
          </div>
        </div>
        <div class="col-4">
          <div class="border rounded-3 p-3 bg-light">
            <div class="text-muted small">Top Location</div>
            <div class="fw-bold text-dark fs-6 mt-1">India (82%)</div>
          </div>
        </div>
      </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4">
      <h4 class="h5 fw-bold text-dark mb-3">Recent Collaboration Deliverables</h4>
      <div class="row g-3">
        <div class="col-12 col-md-6">
          <div class="border rounded-3 p-3">
            <div class="d-flex align-items-center gap-2 mb-2">
              <span class="badge badge-success">Instagram Reel</span>
              <span class="small text-muted">14.2K Likes</span>
            </div>
            <div class="fw-bold small text-dark mb-1">30-Day Weight Loss Journey with Reshe Clinic</div>
            <div class="small text-secondary">Achieved 240+ direct form signups in 7 days.</div>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="border rounded-3 p-3">
            <div class="d-flex align-items-center gap-2 mb-2">
              <span class="badge badge-info">YouTube Review</span>
              <span class="small text-muted">45.8K Views</span>
            </div>
            <div class="fw-bold small text-dark mb-1">My Daily Healthy Routine &amp; Nutrition Pack</div>
            <div class="small text-secondary">Featured promo link with 12.4% CTR.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
