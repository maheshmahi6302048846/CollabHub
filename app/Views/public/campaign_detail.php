<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-4 bg-light">
  <div class="container py-2">
    <div class="mb-3">
      <a href="<?= base_url('campaigns') ?>" class="text-secondary fw-semibold small text-decoration-none">&larr; Back to Campaigns</a>
    </div>

    <!-- HEADER BANNER CARD -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
      <div class="position-relative" style="height:220px; background:linear-gradient(135deg, #5B21B6 0%, #7C3AED 100%);">
        <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=1200&q=80" alt="Banner" class="w-100 h-100 object-fit-cover opacity-50">
        <span class="badge badge-success position-absolute top-0 end-0 m-3 px-3 py-2 fs-6">Free Service</span>
      </div>

      <div class="card-body p-4 bg-white position-relative" style="margin-top:-40px; border-top-left-radius:var(--radius-xl); border-top-right-radius:var(--radius-xl);">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3">
          <div class="d-flex align-items-center align-items-md-end gap-3">
            <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=140&q=80" class="avatar avatar-lg rounded-circle border border-4 border-white shadow-sm" style="width:72px;height:72px;object-fit:cover;" alt="Brand Logo">
            <div>
              <div class="small text-primary fw-bold text-uppercase">Reshe Clinic</div>
              <h1 class="h3 fw-bold text-dark mb-1">Weight Loss Awareness Campaign</h1>
              <div class="small text-muted">Fitness &amp; Health &bull; Mumbai, India &bull; Deadline: 25 Mar 2026</div>
            </div>
          </div>

          <button onclick="openModal('applyModal')" class="btn btn-primary btn-lg px-4 py-2 mt-2 mt-md-0">I'm Interested</button>
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT GRID -->
    <div class="row g-4">
      <div class="col-12 col-lg-8">
        <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
          <h3 class="h5 fw-bold mb-3">About the Campaign</h3>
          <p class="text-secondary lh-lg mb-0">
            Reshe Clinic is launching an exclusive wellness initiative aimed at promoting sustainable, healthy weight loss and customized body transformation programs. We are looking for authentic lifestyle and fitness creators to document their consultation experience.
          </p>
        </div>

        <div class="card border-0 shadow-sm rounded-4 p-4">
          <h3 class="h5 fw-bold mb-3">Deliverables &amp; Content Requirements</h3>
          <ul class="list-unstyled text-dark lh-lg mb-0 d-flex flex-column gap-2">
            <li>✔️ <strong>1x Instagram Reel (30-60s)</strong> - Highlighting clinic visit &amp; consultation experience</li>
            <li>✔️ <strong>2x Instagram Stories</strong> - Unboxing treatment plan with swipe-up link</li>
            <li>✔️ Honest review focusing on health and personalized care</li>
          </ul>
        </div>
      </div>

      <!-- SIDEBAR METRICS -->
      <div class="col-12 col-lg-4">
        <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
          <h4 class="h6 fw-bold mb-2">Compensation</h4>
          <div class="display-6 fw-extrabold text-success mb-1">Free Treatment</div>
          <p class="small text-muted mb-0">Valued at ₹35,000 + Exclusive VIP Pass</p>
        </div>

        <div class="card border-0 shadow-sm rounded-4 p-4">
          <h4 class="h6 fw-bold mb-3">Creator Requirements</h4>
          <div class="small text-dark lh-lg">
            <div><strong>Min Followers:</strong> 10K+</div>
            <div><strong>Min Engagement:</strong> 3.5%</div>
            <div><strong>Target Platforms:</strong> Instagram, YouTube</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- APPLY / INTEREST MODAL -->
<div id="applyModal" class="modal-overlay">
  <div class="modal-card">
    <div class="modal-header">
      <h4 class="h5 fw-bold mb-0">Apply for Weight Loss Campaign</h4>
      <button onclick="closeModal('applyModal')" style="background:none;border:none;cursor:pointer;font-size:1.2rem;">&times;</button>
    </div>
    <div class="modal-body">
      <p class="small text-secondary mb-3">
        Log in or register as a creator to submit your application pitch directly to Reshe Clinic.
      </p>
      <div class="form-group mb-0">
        <label class="form-label fw-semibold small">Your Pitch / Proposal</label>
        <textarea class="form-control" rows="3" placeholder="Briefly describe how you plan to showcase this campaign..."></textarea>
      </div>
    </div>
    <div class="modal-footer">
      <button onclick="closeModal('applyModal')" class="btn btn-outline">Cancel</button>
      <a href="<?= base_url('register?type=creator') ?>" class="btn btn-primary">Submit Application</a>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
