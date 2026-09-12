<?= $this->extend('layouts/app_brand') ?>

<?= $this->section('content') ?>

<div class="chat-wrapper">
  <!-- LEFT: CONVERSATION LIST -->
  <div class="chat-sidebar">
    <div class="chat-search-bar">
      <input type="text" class="form-control" placeholder="Search creators..." style="font-size:0.85rem;">
    </div>
    <div class="chat-list">
      <div class="chat-item active">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm">
        <div style="flex:1; min-width:0;">
          <div style="display:flex; justify-content:space-between; align-items:center;">
            <div style="font-weight:700; font-size:0.9rem; color:var(--gray-900);">Priya Sharma</div>
            <span style="font-size:0.7rem; color:var(--gray-400);">10:42 AM</span>
          </div>
          <div style="font-size:0.8rem; color:var(--gray-600); white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Script draft submitted for review</div>
        </div>
      </div>
    </div>
  </div>

  <!-- RIGHT: ACTIVE CONVERSATION -->
  <div class="chat-main">
    <div class="chat-header">
      <div style="display:flex; align-items:center; gap:0.75rem;">
        <button type="button" class="btn btn-sm btn-outline d-lg-none py-1 px-2 me-1" onclick="toggleMobileChat(false)" title="Back to Messages">&larr; Back</button>
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm">
        <div>
          <div style="font-weight:700; font-size:0.95rem; color:var(--gray-900);">Priya Sharma</div>
          <div style="font-size:0.75rem; color:var(--success-main); font-weight:600;">● Active Creator &bull; Weight Loss Campaign</div>
        </div>
      </div>
    </div>

    <div class="chat-messages" id="chatMessages">
      <div class="message-bubble message-received">
        <p>Hi team! I published the Instagram Reel and tagged @resheclinic. Here is the post analytics link.</p>
        <div style="font-size:0.7rem; color:var(--gray-500); margin-top:4px;">10:42 AM</div>
      </div>

      <div class="message-bubble message-sent">
        <p>Outstanding work Priya! We see great traction on the reel. Escrow payment of ₹25,000 has been approved!</p>
        <div style="font-size:0.7rem; opacity:0.8; text-align:right; margin-top:4px;">10:45 AM</div>
      </div>
    </div>

    <form class="chat-composer" id="chatForm">
      <input type="text" id="chatInput" class="form-control" placeholder="Type your message..." required style="flex:1;">
      <button type="submit" class="btn btn-primary">Send &rarr;</button>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
