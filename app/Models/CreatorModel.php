<?php

namespace App\Models;

use CodeIgniter\Model;

class CreatorModel extends Model
{
    protected $table            = 'creators';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'full_name', 'handle', 'avatar_url', 'niche', 'followers_count', 'engagement_rate', 'bio'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getByUserId(int $userId)
    {
        return $this->where('user_id', $userId)->first();
    }
}
