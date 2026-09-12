<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CampaignSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();

        // Get Brand ID for Reshe Clinic
        $brand = $db->table('brands')->getWhere(['company_name' => 'Reshe Clinic'])->getRowArray();
        $brandId = $brand['id'] ?? 1;

        $campaigns = [
            [
                'brand_id'           => $brandId,
                'title'              => 'Weight Loss Awareness Campaign',
                'category'           => 'Fitness & Health',
                'budget'             => 25000.00,
                'status'             => 'active',
                'influencers_needed' => 10,
                'influencers_hired'  => 3,
                'description'        => 'Create engaging lifestyle reels and stories sharing your non-invasive weight loss journey and wellness treatment experience.',
                'deliverables'       => '1 Instagram Reel (60s) + 3 Instagram Stories with link + 1 YouTube Short.',
                'created_at'         => date('Y-m-d H:i:s'),
                'updated_at'         => date('Y-m-d H:i:s'),
            ],
            [
                'brand_id'           => $brandId,
                'title'              => 'Organic Nutrition & Protein Promotion',
                'category'           => 'Health & Wellness',
                'budget'             => 15000.00,
                'status'             => 'active',
                'influencers_needed' => 5,
                'influencers_hired'  => 1,
                'description'        => 'Promote plant-based organic protein powder and daily green smoothie recipes.',
                'deliverables'       => '1 Dedicated YouTube Video Integration + 2 Instagram Reels.',
                'created_at'         => date('Y-m-d H:i:s'),
                'updated_at'         => date('Y-m-d H:i:s'),
            ],
            [
                'brand_id'           => $brandId,
                'title'              => 'Summer Glow Skincare Routine',
                'category'           => 'Fashion & Beauty',
                'budget'             => 20000.00,
                'status'             => 'active',
                'influencers_needed' => 8,
                'influencers_hired'  => 2,
                'description'        => 'Showcase morning skincare routine featuring natural sun defense serums.',
                'deliverables'       => '2 Instagram Reels + 1 TikTok video.',
                'created_at'         => date('Y-m-d H:i:s'),
                'updated_at'         => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($campaigns as $camp) {
            $db->table('campaigns')->ignore(true)->insert($camp);
        }
    }
}
