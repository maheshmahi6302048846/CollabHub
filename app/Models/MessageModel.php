<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table            = 'messages';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'sender_id',
        'receiver_id',
        'campaign_id',
        'message',
        'is_read',
        'created_at',
    ];

    protected $useTimestamps = false;

    public function getConversation(int $userId1, int $userId2)
    {
        return $this->db->table($this->table)
            ->where("(sender_id = {$userId1} AND receiver_id = {$userId2}) OR (sender_id = {$userId2} AND receiver_id = {$userId1})")
            ->orderBy('id', 'ASC')
            ->get()->getResultArray();
    }
}
