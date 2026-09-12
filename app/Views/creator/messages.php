<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="chat-wrapper">
  
  <!-- LEFT: CONVERSATION LIST -->
  <div class="chat-sidebar">
    <div class="chat-search-bar">
      <input type="text" class="form-control" placeholder="Search conversations..." style="font-size:0.85rem;">
    </div>

    <div class="chat-list">
      <div class="chat-item active">
        <div class="avatar bg-primary text-white fw-bold d-flex align-items-center justify-content-center rounded-circle" style="width:36px;height:36px;font-size:0.95rem;background:var(--gradient-hero) !important;">
          B
        </div>
        <div style="flex:1; min-width:0;">
          <div style="display:flex; justify-content:space-between; align-items:center;">
            <div style="font-weight:700; font-size:0.9rem; color:var(--gray-900);">Reshe Clinic (Brand)</div>
            <span style="font-size:0.7rem; color:var(--gray-400);">Live</span>
          </div>
          <div style="font-size:0.8rem; color:var(--gray-600); white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Direct Brand Collaboration Chat</div>
        </div>
      </div>
    </div>
  </div>

  <!-- RIGHT: ACTIVE CONVERSATION -->
  <div class="chat-main">
    <div class="chat-header">
      <div style="display:flex; align-items:center; gap:0.75rem;">
        <div class="avatar bg-primary text-white fw-bold d-flex align-items-center justify-content-center rounded-circle" style="width:36px;height:36px;font-size:0.95rem;background:var(--gradient-hero) !important;">
          B
        </div>
        <div>
          <div style="font-weight:700; font-size:0.95rem; color:var(--gray-900);">Reshe Clinic</div>
          <div style="font-size:0.75rem; color:var(--success-main); font-weight:600;">● Active Brand Collaboration</div>
        </div>
      </div>
    </div>

    <!-- MESSAGES AREA -->
    <div class="chat-messages" id="chatMessages" style="max-height:400px; overflow-y:auto; padding:1rem;">
      <div class="message-bubble message-received mb-3 p-3 bg-light rounded-3" style="max-width:75%;">
        <p class="mb-1 text-dark">Hi! Welcome to CollabHub messaging. Feel free to ask questions about campaign deliverables.</p>
        <div style="font-size:0.7rem; color:var(--gray-500);">System Message</div>
      </div>

      <?php if (!empty($chatMessages)): ?>
        <?php foreach ($chatMessages as $msg): ?>
          <?php $isMine = (int)$msg['sender_id'] === (int)session()->get('user_id'); ?>
          <div class="message-bubble <?= $isMine ? 'message-sent ms-auto text-end bg-primary text-white' : 'message-received bg-light text-dark' ?> mb-3 p-3 rounded-3" style="max-width:75%;">
            <p class="mb-1"><?= esc($msg['message']) ?></p>
            <div style="font-size:0.7rem; opacity:0.8;"><?= date('h:i A', strtotime($msg['created_at'])) ?></div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <!-- CHAT COMPOSER -->
    <form action="<?= base_url('creator/send-message') ?>" method="post" class="chat-composer p-3 border-top d-flex gap-2">
      <?= csrf_field() ?>
      <input type="hidden" name="receiver_id" value="<?= esc($receiverId ?? 3) ?>">
      <input type="text" name="message" class="form-control" placeholder="Type your message..." required style="flex:1;">
      <button type="submit" class="btn btn-primary px-4 fw-bold">Send &rarr;</button>
    </form>
  </div>

</div>

<?= $this->endSection() ?>
