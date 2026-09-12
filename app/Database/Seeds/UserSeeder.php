<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();

        // 1. Creator Account
        $creatorUser = [
            'email'         => 'priya@collabhub.com',
            'password_hash' => password_hash('password123', PASSWORD_BCRYPT),
            'role'          => 'creator',
            'status'        => 'active',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ];
        $db->table('users')->ignore(true)->insert($creatorUser);
        $creatorId = $db->insertID();

        if ($creatorId) {
            $db->table('creators')->ignore(true)->insert([
                'user_id'         => $creatorId,
                'full_name'       => 'Priya Sharma',
                'handle'          => '@priyasharma',
                'niche'           => 'Fashion & Beauty',
                'followers_count' => 125000,
                'bio'             => 'Lifestyle, fashion & UGC content creator based in Mumbai.',
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ]);
        }

        // 2. Brand Account
        $brandUser = [
            'email'         => 'brand@collabhub.com',
            'password_hash' => password_hash('password123', PASSWORD_BCRYPT),
            'role'          => 'brand',
            'status'        => 'active',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ];
        $db->table('users')->ignore(true)->insert($brandUser);
        $brandId = $db->insertID();

        if ($brandId) {
            $db->table('brands')->ignore(true)->insert([
                'user_id'      => $brandId,
                'company_name' => 'Reshe Clinic',
                'owner_name'   => 'Reshe Marketing Team',
                'industry'     => 'Health & Wellness',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
