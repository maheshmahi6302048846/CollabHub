<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<?php
  $userName  = $creator['full_name'] ?? session()->get('name') ?? 'Creator';
  $handle    = $creator['handle'] ?? '@creator';
?>

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
        <div class="wizard-label">Complete</div>
      </div>
    </div>

    <form action="<?= base_url('creator/onboarding') ?>" method="post">
      <?= csrf_field() ?>

      <!-- STEP 1: ACCOUNT CREATED -->
      <div class="wizard-step-content card" id="step1" style="padding:2.5rem; text-align:center;">
        <div style="font-size:2.5rem; margin-bottom:1rem;">🎉</div>
        <h2 style="font-size:1.8rem; margin-bottom:0.5rem;">Welcome to CollabHub, <?= esc($userName) ?>!</h2>
        <p style="color:var(--gray-600); margin-bottom:2rem;">Your creator account has been created. Let's set up your media kit profile in 3 quick steps.</p>
        <button type="button" onclick="goToWizardStep(2)" class="btn btn-primary btn-lg">Start Setup &rarr;</button>
      </div>

      <!-- STEP 2: COLLABORATION OPTIONS -->
      <div class="wizard-step-content card" id="step2" style="padding:2.5rem; display:none;">
        <h3 style="font-size:1.5rem; margin-bottom:0.5rem;">Select Primary Category &amp; Reach</h3>
        <p style="color:var(--gray-600); font-size:0.9rem; margin-bottom:1.75rem;">Which niche fits your content best?</p>

        <div class="mb-3">
          <label class="form-label fw-bold small text-dark">Primary Content Niche</label>
          <select name="niche" class="form-select">
            <option value="Fashion & Beauty">Fashion & Beauty</option>
            <option value="Fitness & Health">Fitness & Health</option>
            <option value="Tech & Gadgets">Tech & Gadgets</option>
            <option value="Food & Travel">Food & Travel</option>
            <option value="Lifestyle & Vlog">Lifestyle & Vlog</option>
          </select>
        </div>

        <div class="mb-4">
          <label class="form-label fw-bold small text-dark">Estimated Audience Size / Followers</label>
          <input type="number" name="followers_count" class="form-control" placeholder="10000" value="15000">
        </div>

        <div style="display:flex; justify-content:space-between;">
          <button type="button" onclick="goToWizardStep(1)" class="btn btn-outline">&larr; Back</button>
          <button type="button" onclick="goToWizardStep(3)" class="btn btn-primary">Continue &rarr;</button>
        </div>
      </div>

      <!-- STEP 3: PROFILE COMPLETION -->
      <div class="wizard-step-content card border-0 shadow-sm rounded-4 p-4 p-md-5" id="step3" style="display:none;">
        <h3 class="h4 fw-bold text-dark mb-1">Complete Your Bio</h3>
        <p class="text-muted small mb-4">Brands review these details before sending collaboration requests.</p>

        <div class="mb-3">
          <label class="form-label fw-bold small text-dark">Creator Pitch / Bio</label>
          <textarea name="bio" class="form-control" rows="3" placeholder="Describe your audience and content style...">Digital content creator passionate about authentic brand storytelling and UGC.</textarea>
        </div>

        <div class="d-flex justify-content-between mt-4">
          <button type="button" onclick="goToWizardStep(2)" class="btn btn-outline">&larr; Back</button>
          <button type="submit" class="btn btn-primary btn-lg">Finish &amp; Go to Dashboard &rarr;</button>
        </div>
      </div>

    </form>

  </div>
</section>

<?= $this->endSection() ?>
