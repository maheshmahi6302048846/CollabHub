<?php

namespace App\Models;

use CodeIgniter\Model;

class CampaignModel extends Model
{
    protected $table            = 'campaigns';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'brand_id',
        'title',
        'category',
        'budget',
        'status',
        'influencers_needed',
        'influencers_hired',
        'description',
        'deliverables',
        'created_at',
        'updated_at',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getActiveCampaigns(?string $category = null)
    {
        $builder = $this->db->table($this->table)
            ->select('campaigns.*, brands.company_name, brands.logo_url, brands.industry')
            ->join('brands', 'brands.id = campaigns.brand_id', 'left')
            ->where('campaigns.status', 'active');

        if (!empty($category) && $category !== 'all') {
            $builder->like('campaigns.category', $category);
        }

        return $builder->orderBy('campaigns.id', 'DESC')->get()->getResultArray();
    }

    public function getBrandCampaigns(int $brandId)
    {
        return $this->where('brand_id', $brandId)
                    ->orderBy('id', 'DESC')
                    ->findAll();
    }

    public function getCampaignWithBrand(int $campaignId)
    {
        return $this->db->table($this->table)
            ->select('campaigns.*, brands.company_name, brands.logo_url, brands.owner_name, brands.industry')
            ->join('brands', 'brands.id = campaigns.brand_id', 'left')
            ->where('campaigns.id', $campaignId)
            ->get()->getRowArray();
    }
}
