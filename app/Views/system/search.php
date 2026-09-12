<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section style="padding: 3.5rem 0; background: var(--bg-app); min-height: calc(100vh - 200px);">
  <div class="container container-sm">
    <div style="margin-bottom:2rem;">
      <h1 style="font-size:2.2rem; margin-bottom:0.25rem;">Global Platform Search</h1>
      <p style="color:var(--gray-600);">Find campaigns, brands, or verified content creators across CollabHub.</p>
    </div>

    <div class="card" style="padding:1.5rem; margin-bottom:2rem;">
      <div style="position:relative;">
        <input type="text" class="form-control" placeholder="Type to search..." style="font-size:1.1rem; padding-left:2.75rem;" value="Fitness">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="position:absolute; left:16px; top:15px; color:var(--gray-400);"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
      </div>
    </div>

    <div class="card">
      <h3 style="font-size:1.1rem; margin-bottom:1rem;">Search Results (3 Found)</h3>
      
      <div style="display:flex; flex-direction:column; gap:1rem;">
        <div style="display:flex; align-items:center; justify-content:space-between; padding-bottom:1rem; border-bottom:1px solid var(--gray-100);">
          <div style="display:flex; align-items:center; gap:0.85rem;">
            <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm">
            <div>
              <div style="font-weight:700; font-size:0.95rem;">Weight Loss Awareness Campaign</div>
              <div style="font-size:0.75rem; color:var(--gray-500);">Reshe Clinic &bull; Fitness & Health</div>
            </div>
          </div>
          <a href="<?= base_url('campaigns/1') ?>" class="btn btn-outline btn-sm">View Campaign</a>
        </div>

        <div style="display:flex; align-items:center; justify-content:space-between;">
          <div style="display:flex; align-items:center; gap:0.85rem;">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm">
            <div>
              <div style="font-weight:700; font-size:0.95rem;">Priya Sharma</div>
              <div style="font-size:0.75rem; color:var(--gray-500);">Fitness & Lifestyle Creator &bull; 185K Followers</div>
            </div>
          </div>
          <a href="<?= base_url('brand/influencers/1') ?>" class="btn btn-outline btn-sm">View Creator</a>
        </div>
      </div>
    </div>

  </div>
</section>

<?= $this->endSection() ?>
