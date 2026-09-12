<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div style="margin-bottom:2rem;">
  <h1 style="font-size:2.2rem; margin-bottom:0.25rem;">Create New Campaign</h1>
  <p style="color:var(--gray-600);">Define campaign parameters, target creator criteria, and compensation terms.</p>
</div>

<!-- WIZARD STEP INDICATOR BAR -->
<div class="card" style="padding:1.5rem; margin-bottom:2rem;">
  <div class="wizard-steps" style="margin:0;">
    <div class="wizard-step active" id="cStepInd1">
      <div class="wizard-num">1</div>
      <div class="wizard-label">Details</div>
    </div>
    <div class="wizard-step" id="cStepInd2">
      <div class="wizard-num">2</div>
      <div class="wizard-label">Collaboration</div>
    </div>
    <div class="wizard-step" id="cStepInd3">
      <div class="wizard-num">3</div>
      <div class="wizard-label">Requirements</div>
    </div>
    <div class="wizard-step" id="cStepInd4">
      <div class="wizard-num">4</div>
      <div class="wizard-label">Influencers</div>
    </div>
    <div class="wizard-step" id="cStepInd5">
      <div class="wizard-num">5</div>
      <div class="wizard-label">Review</div>
    </div>
  </div>
</div>

<!-- STEP 1: CAMPAIGN DETAILS -->
<div class="wizard-step-content card border-0 shadow-sm rounded-4 p-4 p-md-5" id="cStep1">
  <h3 class="h4 fw-bold text-dark mb-4">Step 1: Campaign Details</h3>
  
  <div class="mb-3">
    <label class="form-label fw-bold small text-dark">Campaign Title</label>
    <input type="text" class="form-control" value="Metabolic Health & Wellness Awareness" placeholder="e.g. Summer Collection Launch">
  </div>

  <div class="row g-3 mb-3">
    <div class="col-12 col-md-6">
      <label class="form-label fw-bold small text-dark">Category</label>
      <select class="form-select">
        <option>Fitness & Health</option>
        <option>Beauty & Fashion</option>
        <option>Food & Beverage</option>
      </select>
    </div>
    <div class="col-12 col-md-6">
      <label class="form-label fw-bold small text-dark">Location Target</label>
      <input type="text" class="form-control" value="Mumbai, India (Pan-India online)">
    </div>
  </div>

  <div class="mb-4">
    <label class="form-label fw-bold small text-dark">Campaign Description & Objectives</label>
    <textarea class="form-control" rows="3">Promote our customized metabolic health evaluation. Creators will receive a complimentary consultation and personalized wellness roadmap.</textarea>
  </div>

  <div class="d-flex justify-content-end">
    <button onclick="goToWizardStep(2)" class="btn btn-primary">Next: Collaboration Options &rarr;</button>
  </div>
</div>

<!-- STEP 2: COLLABORATION OPTIONS -->
<div class="wizard-step-content card border-0 shadow-sm rounded-4 p-4 p-md-5" id="cStep2" style="display:none;">
  <h3 class="h4 fw-bold text-dark mb-4">Step 2: Select Collaboration Type</h3>
  
  <div class="d-flex flex-column gap-3 mb-4">
    <label class="card card-interactive p-3 d-flex flex-row align-items-center gap-3 cursor-pointer">
      <input type="checkbox" checked class="form-check-input mt-0" style="width:20px; height:20px;">
      <div>
        <div class="fw-bold text-dark">FREE Product Gifting</div>
        <div class="small text-muted">Ship complimentary products directly to creators.</div>
      </div>
    </label>

    <label class="card card-interactive p-3 d-flex flex-row align-items-center gap-3 cursor-pointer">
      <input type="checkbox" checked class="form-check-input mt-0" style="width:20px; height:20px;">
      <div>
        <div class="fw-bold text-dark">FREE Service / VIP Experience</div>
        <div class="small text-muted">In-person clinic treatments, spa, dining, or travel experiences.</div>
      </div>
    </label>

    <label class="card card-interactive p-3 d-flex flex-row align-items-center gap-3 cursor-pointer">
      <input type="checkbox" class="form-check-input mt-0" style="width:20px; height:20px;">
      <div>
        <div class="fw-bold text-dark">PAID Monetary Compensation</div>
        <div class="small text-muted">Fixed monetary payout per creator post.</div>
      </div>
    </label>
  </div>

  <div class="d-flex justify-content-between">
    <button onclick="goToWizardStep(1)" class="btn btn-outline">&larr; Back</button>
    <button onclick="goToWizardStep(3)" class="btn btn-primary">Next: Requirements &rarr;</button>
  </div>
</div>

<!-- STEP 3: REQUIREMENTS -->
<div class="wizard-step-content card border-0 shadow-sm rounded-4 p-4 p-md-5" id="cStep3" style="display:none;">
  <h3 class="h4 fw-bold text-dark mb-4">Step 3: Deliverables & Creator Requirements</h3>

  <div class="row g-3 mb-3">
    <div class="col-12 col-md-6">
      <label class="form-label fw-bold small text-dark">Influencers Needed</label>
      <input type="number" class="form-control" value="10">
    </div>
    <div class="col-12 col-md-6">
      <label class="form-label fw-bold small text-dark">Min Follower Requirement</label>
      <select class="form-select">
        <option>10K+ Followers</option>
        <option>50K+ Followers</option>
        <option>100K+ Followers</option>
      </select>
    </div>
  </div>

  <div class="mb-4">
    <label class="form-label fw-bold small text-dark mb-2">Content Format Deliverables</label>
    <div class="d-flex flex-wrap gap-3">
      <label class="form-check-label"><input type="checkbox" checked class="form-check-input me-1"> Instagram Reel (30-60s)</label>
      <label class="form-check-label"><input type="checkbox" checked class="form-check-input me-1"> Instagram Stories (2x)</label>
      <label class="form-check-label"><input type="checkbox" class="form-check-input me-1"> YouTube Short</label>
    </div>
  </div>

  <div class="d-flex justify-content-between">
    <button onclick="goToWizardStep(2)" class="btn btn-outline">&larr; Back</button>
    <button onclick="goToWizardStep(4)" class="btn btn-primary">Next: Influencers &rarr;</button>
  </div>
</div>

<!-- STEP 4: INFLUENCERS SHORTLIST -->
<div class="wizard-step-content card" id="cStep4" style="padding:2.5rem; display:none;">
  <h3 style="font-size:1.3rem; margin-bottom:1.5rem;">Step 4: Invite Creators / Marketplace Listing</h3>
  <p style="color:var(--gray-600); margin-bottom:1.5rem;">Your campaign will automatically be published to the creator discovery marketplace.</p>

  <div style="display:flex; justify-content:space-between;">
    <button onclick="goToWizardStep(3)" class="btn btn-outline">&larr; Back</button>
    <button onclick="goToWizardStep(5)" class="btn btn-primary">Next: Review & Publish &rarr;</button>
  </div>
</div>

<!-- STEP 5: REVIEW & PUBLISH -->
<div class="wizard-step-content card" id="cStep5" style="padding:2.5rem; display:none;">
  <h3 style="font-size:1.4rem; margin-bottom:1rem;">Step 5: Review Campaign Details</h3>
  
  <div style="background:var(--gray-50); padding:1.5rem; border-radius:12px; margin-bottom:2rem; line-height:2;">
    <div><strong>Campaign Name:</strong> Metabolic Health & Wellness Awareness</div>
    <div><strong>Category:</strong> Fitness & Health &bull; 10 Creators Needed</div>
    <div><strong>Collaboration Type:</strong> Free VIP Treatment (Valued at ₹35,000)</div>
    <div><strong>Deliverables:</strong> 1x Instagram Reel + 2x Stories</div>
  </div>

  <div style="display:flex; justify-content:space-between;">
    <button onclick="goToWizardStep(4)" class="btn btn-outline">&larr; Back</button>
    <a href="<?= base_url('brand/campaigns') ?>" class="btn btn-primary btn-lg">🚀 Publish Campaign Now</a>
  </div>
</div>

<?= $this->endSection() ?>
