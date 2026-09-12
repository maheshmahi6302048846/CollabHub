<?php

namespace App\Models;

use CodeIgniter\Model;

class CampaignRequestModel extends Model
{
    protected $table            = 'campaign_requests';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'campaign_id',
        'creator_id',
        'proposal',
        'type',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getRequestsForBrand(int $brandId)
    {
        return $this->db->table($this->table)
            ->select('campaign_requests.*, campaigns.title as campaign_title, creators.full_name as creator_name, creators.handle, creators.followers_count, creators.niche, users.id as creator_user_id')
            ->join('campaigns', 'campaigns.id = campaign_requests.campaign_id', 'inner')
            ->join('creators', 'creators.id = campaign_requests.creator_id', 'inner')
            ->join('users', 'users.id = creators.user_id', 'inner')
            ->where('campaigns.brand_id', $brandId)
            ->orderBy('campaign_requests.id', 'DESC')
            ->get()->getResultArray();
    }

    public function getRequestsForCreator(int $creatorId)
    {
        return $this->db->table($this->table)
            ->select('campaign_requests.*, campaigns.title as campaign_title, campaigns.budget, brands.company_name, brands.logo_url')
            ->join('campaigns', 'campaigns.id = campaign_requests.campaign_id', 'inner')
            ->join('brands', 'brands.id = campaigns.brand_id', 'inner')
            ->where('campaign_requests.creator_id', $creatorId)
            ->orderBy('campaign_requests.id', 'DESC')
            ->get()->getResultArray();
    }
}
