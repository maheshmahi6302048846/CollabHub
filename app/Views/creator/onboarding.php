<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section style="padding: 3rem 0; background: var(--bg-app); min-height: calc(100vh - 120px);">
  <div class="container container-sm">
    
    <!-- WIZARD STEP INDICATORS -->
    <div class="wizard-steps">
      <div class="wizard-step active" id="ind1">
        <div class="wizard-num">1</div>
        <div class="wizard-label">Account</div>
      </div>
      <div class="wizard-step" id="ind2">
        <div class="wizard-num">2</div>
        <div class="wizard-label">Options</div>
      </div>
      <div class="wizard-step" id="ind3">
        <div class="wizard-num">3</div>
        <div class="wizard-label">Profile</div>
      </div>
      <div class="wizard-step" id="ind4">
        <div class="wizard-num">4</div>
        <div class="wizard-label">Interests</div>
      </div>
      <div class="wizard-step" id="ind5">
        <div class="wizard-num">5</div>
        <div class="wizard-label">Complete</div>
      </div>
    </div>

    <!-- STEP 1: ACCOUNT CREATED -->
    <div class="wizard-step-content card" id="step1" style="padding:2.5rem; text-align:center;">
      <div style="font-size:2.5rem; margin-bottom:1rem;">🎉</div>
      <h2 style="font-size:1.8rem; margin-bottom:0.5rem;">Welcome to CollabHub, Priya!</h2>
      <p style="color:var(--gray-600); margin-bottom:2rem;">Your creator account has been successfully created. Let's customize your profile in 4 quick steps.</p>
      <button onclick="goToWizardStep(2)" class="btn btn-primary btn-lg">Start Setup &rarr;</button>
    </div>

    <!-- STEP 2: COLLABORATION OPTIONS -->
    <div class="wizard-step-content card" id="step2" style="padding:2.5rem; display:none;">
      <h3 style="font-size:1.5rem; margin-bottom:0.5rem;">Select Your Collaboration Preferences</h3>
      <p style="color:var(--gray-600); font-size:0.9rem; margin-bottom:1.75rem;">Which types of campaign deals do you want to receive from brands?</p>

      <div style="display:flex; flex-direction:column; gap:1rem; margin-bottom:2rem;">
        <label class="card card-interactive" style="display:flex; align-items:center; gap:1rem; padding:1.25rem; cursor:pointer;">
          <input type="checkbox" checked style="width:20px; height:20px; accent-color:var(--primary-600);">
          <div>
            <div style="font-weight:700; color:var(--gray-900);">FREE Product Gifting</div>
            <div style="font-size:0.85rem; color:var(--gray-500);">Receive complimentary product shipments in exchange for unboxing content.</div>
          </div>
        </label>

        <label class="card card-interactive" style="display:flex; align-items:center; gap:1rem; padding:1.25rem; cursor:pointer;">
          <input type="checkbox" checked style="width:20px; height:20px; accent-color:var(--primary-600);">
          <div>
            <div style="font-weight:700; color:var(--gray-900);">FREE Service & Experiences</div>
            <div style="font-size:0.85rem; color:var(--gray-500);">Complimentary spa treatments, resort stays, fine dining, and health consults.</div>
          </div>
        </label>

        <label class="card card-interactive" style="display:flex; align-items:center; gap:1rem; padding:1.25rem; cursor:pointer;">
          <input type="checkbox" checked style="width:20px; height:20px; accent-color:var(--primary-600);">
          <div>
            <div style="font-weight:700; color:var(--gray-900);">PAID Monetary Collaborations</div>
            <div style="font-size:0.85rem; color:var(--gray-500);">Monetary payment per Reel, TikTok video, or sponsored YouTube integration.</div>
          </div>
        </label>
      </div>

      <div style="display:flex; justify-content:space-between;">
        <button onclick="goToWizardStep(1)" class="btn btn-outline">&larr; Back</button>
        <button onclick="goToWizardStep(3)" class="btn btn-primary">Continue &rarr;</button>
      </div>
    </div>

    <!-- STEP 3: PROFILE COMPLETION -->
    <div class="wizard-step-content card border-0 shadow-sm rounded-4 p-4 p-md-5" id="step3" style="display:none;">
      <h3 class="h4 fw-bold text-dark mb-1">Complete Your Creator Media Kit</h3>
      <p class="text-muted small mb-4">Brands review these details before sending collaboration requests.</p>

      <div class="row g-3 mb-3">
        <div class="col-12 col-md-6">
          <label class="form-label fw-bold small text-dark">Full Name</label>
          <input type="text" class="form-control" value="Priya Sharma">
        </div>
        <div class="col-12 col-md-6">
          <label class="form-label fw-bold small text-dark">Username</label>
          <input type="text" class="form-control" value="@priyasharma_fit">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label fw-bold small text-dark">Bio / Elevator Pitch</label>
        <textarea class="form-control" rows="2">Fitness & Lifestyle Content Creator based in Mumbai. Passionate about wellness, organic nutrition, and active wear.</textarea>
      </div>

      <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
          <label class="form-label fw-bold small text-dark">Instagram Handle</label>
          <input type="text" class="form-control" value="@priyasharma_fit">
        </div>
        <div class="col-12 col-md-4">
          <label class="form-label fw-bold small text-dark">YouTube Channel</label>
          <input type="text" class="form-control" value="PriyaFitnessTV">
        </div>
        <div class="col-12 col-md-4">
          <label class="form-label fw-bold small text-dark">TikTok Handle</label>
          <input type="text" class="form-control" value="@priyasharma">
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <button onclick="goToWizardStep(2)" class="btn btn-outline">&larr; Back</button>
        <button onclick="goToWizardStep(4)" class="btn btn-primary">Continue &rarr;</button>
      </div>
    </div>

    <!-- STEP 4: CHOOSE INTERESTS -->
    <div class="wizard-step-content card border-0 shadow-sm rounded-4 p-4 p-md-5" id="step4" style="display:none;">
      <h3 class="h4 fw-bold text-dark mb-1">Select Content Categories</h3>
      <p class="text-muted small mb-4">Pick all topics relevant to your content creation.</p>

      <div class="row g-3 mb-4">
        <div class="col-6 col-md-4">
          <label class="card card-interactive p-3 h-100 d-flex align-items-center gap-2 cursor-pointer bg-primary-subtle border-primary">
            <input type="checkbox" checked class="form-check-input mt-0"> <span class="fw-semibold small">Fitness & Health</span>
          </label>
        </div>
        <div class="col-6 col-md-4">
          <label class="card card-interactive p-3 h-100 d-flex align-items-center gap-2 cursor-pointer">
            <input type="checkbox" checked class="form-check-input mt-0"> <span class="fw-semibold small">Beauty & Fashion</span>
          </label>
        </div>
        <div class="col-6 col-md-4">
          <label class="card card-interactive p-3 h-100 d-flex align-items-center gap-2 cursor-pointer">
            <input type="checkbox" checked class="form-check-input mt-0"> <span class="fw-semibold small">Food & Beverage</span>
          </label>
        </div>
        <div class="col-6 col-md-4">
          <label class="card card-interactive p-3 h-100 d-flex align-items-center gap-2 cursor-pointer">
            <input type="checkbox" class="form-check-input mt-0"> <span class="fw-semibold small">Travel & Hotel</span>
          </label>
        </div>
        <div class="col-6 col-md-4">
          <label class="card card-interactive p-3 h-100 d-flex align-items-center gap-2 cursor-pointer">
            <input type="checkbox" checked class="form-check-input mt-0"> <span class="fw-semibold small">Lifestyle</span>
          </label>
        </div>
        <div class="col-6 col-md-4">
          <label class="card card-interactive p-3 h-100 d-flex align-items-center gap-2 cursor-pointer">
            <input type="checkbox" class="form-check-input mt-0"> <span class="fw-semibold small">Tech & Gadgets</span>
          </label>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <button onclick="goToWizardStep(3)" class="btn btn-outline">&larr; Back</button>
        <button onclick="goToWizardStep(5)" class="btn btn-primary">Complete Setup &rarr;</button>
      </div>
    </div>

    <!-- STEP 5: ALL SET SUMMARY -->
    <div class="wizard-step-content card" id="step5" style="padding:3rem; text-align:center; display:none;">
      <div style="width:72px; height:72px; background:var(--success-bg); color:var(--success-main); border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; font-size:2.2rem;">
        ✓
      </div>
      <h2 style="font-size:2.2rem; margin-bottom:0.75rem;">You're All Set, Priya!</h2>
      <p style="color:var(--gray-600); max-width:480px; margin:0 auto 2rem;">
        Your creator media profile is ready. You can now discover brand campaigns, submit proposals, and manage your requests.
      </p>

      <a href="<?= base_url('creator/dashboard') ?>" class="btn btn-primary btn-lg">Go to Creator Dashboard &rarr;</a>
    </div>

  </div>
</section>

<?= $this->endSection() ?>
