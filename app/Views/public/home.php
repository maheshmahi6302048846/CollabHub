<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section style="padding: 3rem 0 3.5rem; background: radial-gradient(circle at 80% 20%, rgba(124, 58, 237, 0.12) 0%, rgba(255,255,255,0) 60%); overflow:hidden;">
  <div class="container">
    <div class="hero-grid">
      
      <!-- HERO TEXT -->
      <div>
        <div class="badge badge-primary" style="margin-bottom:1.25rem; padding:0.45rem 0.9rem; font-size:0.8rem; line-height:1.4;">
          🚀 The #1 Creator &amp; Brand Collaboration Platform
        </div>
        <h1 class="hero-title" style="letter-spacing: -0.02em; line-height: 1.15; margin-bottom: 1.25rem;">
          Connect.<br>
          <span style="background: var(--gradient-primary); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Collaborate.</span><br>
          Grow.
        </h1>
        <p style="font-size: 1.1rem; color: var(--gray-600); margin-bottom: 2rem; max-width: 520px;">
          Where brands meet the right creators for real impact. Seamless campaign management, transparent terms, and direct payments.
        </p>

        <div class="hero-btn-group" style="display:flex; gap:1rem; align-items:center; margin-bottom: 2.5rem; flex-wrap:wrap;">
          <a href="<?= base_url('register?type=creator') ?>" class="btn btn-primary btn-lg">
            I'm an Influencer &rarr;
          </a>
          <a href="<?= base_url('register?type=brand') ?>" class="btn btn-outline btn-lg">
            I'm a Brand &rarr;
          </a>
        </div>

        <!-- TRUST METRICS -->
        <div class="trust-metrics-grid" style="border-top:1px solid var(--gray-200); padding-top:1.75rem;">
          <div>
            <div style="font-size:1.5rem; font-weight:800; color:var(--primary-800); font-family:var(--font-heading);">10K+</div>
            <div style="font-size:0.8rem; color:var(--gray-500); font-weight:600;">Creators</div>
          </div>
          <div>
            <div style="font-size:1.5rem; font-weight:800; color:var(--primary-800); font-family:var(--font-heading);">2K+</div>
            <div style="font-size:0.8rem; color:var(--gray-500); font-weight:600;">Brands</div>
          </div>
          <div>
            <div style="font-size:1.5rem; font-weight:800; color:var(--primary-800); font-family:var(--font-heading);">15K+</div>
            <div style="font-size:0.8rem; color:var(--gray-500); font-weight:600;">Campaigns</div>
          </div>
          <div>
            <div style="font-size:1.5rem; font-weight:800; color:var(--primary-800); font-family:var(--font-heading);">98%</div>
            <div style="font-size:0.8rem; color:var(--gray-500); font-weight:600;">Success Rate</div>
          </div>
        </div>
      </div>

      <!-- HERO VISUAL CONCEPT -->
      <div style="position:relative;">
        <div style="position:absolute; width:260px; height:260px; background:var(--primary-300); filter:blur(90px); opacity:0.4; border-radius:50%; top:-20px; right:0px; z-index:1;"></div>

        <div class="card card-gradient hero-card" style="position:relative; z-index:2; border-radius:var(--radius-xl); box-shadow:var(--shadow-xl);">
          <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.25rem; flex-wrap:wrap; gap:0.5rem;">
            <div style="display:flex; align-items:center; gap:0.75rem;">
              <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Creator" class="avatar avatar-lg">
              <div>
                <h4 style="margin:0; font-size:1.05rem;">Priya Sharma</h4>
                <span class="badge badge-primary">Verified Creator</span>
              </div>
            </div>
            <span class="badge badge-success" style="font-size:0.8rem;">Active Deal</span>
          </div>

          <div class="card" style="background:white; margin-bottom:1.25rem; padding:1rem; border-left:4px solid var(--primary-600);">
            <div style="font-size:0.75rem; color:var(--gray-500); font-weight:600;">CAMPAIGN COLLABORATION</div>
            <div style="font-weight:700; font-size:0.95rem; color:var(--gray-900);">FitLife Nutrition &bull; Protein Promotion</div>
            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:0.5rem; font-size:0.85rem; flex-wrap:wrap; gap:0.4rem;">
              <span style="color:var(--gray-600);">Payout: <strong>₹25,000</strong></span>
              <span class="badge badge-pending">Submitted</span>
            </div>
          </div>

          <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem;">
            <div style="background:white; padding:0.85rem; border-radius:12px; border:1px solid var(--gray-200);">
              <div style="font-size:0.75rem; color:var(--gray-500);">Engagement</div>
              <div style="font-size:1.15rem; font-weight:800; color:var(--success-main);">8.4%</div>
            </div>
            <div style="background:white; padding:0.85rem; border-radius:12px; border:1px solid var(--gray-200);">
              <div style="font-size:0.75rem; color:var(--gray-500);">Audience</div>
              <div style="font-size:1.15rem; font-weight:800; color:var(--primary-700);">185K</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TRUSTED BRANDS BANNER -->
<section style="padding: 2.5rem 0; border-y: 1px solid var(--gray-200); background: white;">
  <div class="container text-center">
    <p style="font-size:0.85rem; font-weight:700; color:var(--gray-400); text-transform:uppercase; letter-spacing:0.05em; margin-bottom:1.5rem; text-align:center;">
      Trusted by leading global &amp; national brands
    </p>
    <div style="display:flex; justify-content:center; align-items:center; flex-wrap:wrap; gap:1.5rem 2.5rem; opacity:0.75; font-family:var(--font-heading); font-weight:800; font-size:1.2rem; color:var(--gray-600);">
      <span>NIKE</span>
      <span>SAMSUNG</span>
      <span>MAMAEARTH</span>
      <span>ZOMATO</span>
      <span>NYKAA</span>
      <span>BOAT</span>
      <span>TITAN</span>
    </div>
  </div>
</section>

<!-- DUAL VALUE PROPOSITION FOR INFLUENCERS & BRANDS -->
<section style="padding: 4rem 0;">
  <div class="container">
    <div style="text-align:center; max-width:650px; margin:0 auto 3rem;">
      <span class="badge badge-primary" style="margin-bottom:0.75rem;">Two Roles. One Unified Platform.</span>
      <h2 style="font-size:2.2rem; margin-bottom:1rem;">Designed for both Creators &amp; Businesses</h2>
      <p style="color:var(--gray-600); font-size:1.05rem;">
        Whether you want to monetize your audience or launch viral influencer campaigns, CollabHub makes collaboration effortless.
      </p>
    </div>

    <div class="grid-2">
      <!-- CREATOR CARD -->
      <div class="card card-interactive" style="padding:2rem; border-radius:var(--radius-xl);">
        <div style="width:50px; height:50px; background:var(--primary-100); color:var(--primary-700); border-radius:14px; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem; font-size:1.4rem;">
          ✨
        </div>
        <h3 style="font-size:1.5rem; margin-bottom:0.75rem;">For Content Creators</h3>
        <p style="color:var(--gray-600); margin-bottom:1.25rem;">
          Turn your audience into recurring income. Apply to verified brand campaigns, receive free product samples, and get paid securely on time.
        </p>
        <ul style="list-style:none; line-height:2.2; margin-bottom:1.75rem; color:var(--gray-700); font-weight:500;">
          <li>✓ Free product &amp; paid campaign access</li>
          <li>✓ Built-in chat &amp; proposal management</li>
          <li>✓ Guaranteed timely payouts</li>
        </ul>
        <a href="<?= base_url('for-influencers') ?>" class="btn btn-secondary">Learn for Creators &rarr;</a>
      </div>

      <!-- BRAND CARD -->
      <div class="card card-interactive" style="padding:2rem; border-radius:var(--radius-xl);">
        <div style="width:50px; height:50px; background:var(--info-bg); color:var(--info-main); border-radius:14px; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem; font-size:1.4rem;">
          📈
        </div>
        <h3 style="font-size:1.5rem; margin-bottom:0.75rem;">For Brands &amp; Businesses</h3>
        <p style="color:var(--gray-600); margin-bottom:1.25rem;">
          Discover vetted creators who align with your brand values. Launch campaigns in minutes, manage content approvals, and track ROI.
        </p>
        <ul style="list-style:none; line-height:2.2; margin-bottom:1.75rem; color:var(--gray-700); font-weight:500;">
          <li>✓ Access to 10K+ verified influencers</li>
          <li>✓ Multi-step campaign creation wizard</li>
          <li>✓ Real-time reach &amp; conversion analytics</li>
        </ul>
        <a href="<?= base_url('for-brands') ?>" class="btn btn-outline">Learn for Brands &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- BOTTOM CTA -->
<section style="padding: 3.5rem 1.5rem; background: var(--gradient-hero); color: white; border-radius: var(--radius-xl); margin: 0 0 4rem;">
  <div class="container text-center" style="max-width:700px; text-align:center;">
    <h2 style="color:white; font-size:2.2rem; margin-bottom:1rem;">Ready to transform your collaborations?</h2>
    <p style="color:var(--gray-300); font-size:1.05rem; margin-bottom:2rem;">
      Join thousands of top creators and brands growing together on CollabHub today.
    </p>
    <div style="display:flex; justify-content:center; gap:1rem; flex-wrap:wrap;">
      <a href="<?= base_url('register?type=creator') ?>" class="btn btn-primary btn-lg">Join as Creator</a>
      <a href="<?= base_url('register?type=brand') ?>" class="btn btn-light btn-lg">Join as Brand</a>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
