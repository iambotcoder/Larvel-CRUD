<?php

namespace Database\Seeders;

use App\Models\UserPortfolio;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'education' => json_encode([
                    ['institution' => 'University of ABC', 'degree' => 'Bachelor of Science in Computer Science'],
                    ['institution' => 'XYZ College', 'degree' => 'Master of Business Administration'],
                ]),
                'work_experience' => json_encode([
                    ['company' => 'ABC Inc.', 'position' => 'Software Engineer', 'duration' => '2016-2019'],
                    ['company' => 'XYZ Corporation', 'position' => 'Project Manager', 'duration' => '2020-Present'],
                ]),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'education' => json_encode([
                    ['institution' => 'LMN University', 'degree' => 'Bachelor of Arts in Literature'],
                    ['institution' => 'PQR College', 'degree' => 'Master of Fine Arts'],
                ]),
                'work_experience' => json_encode([
                    ['company' => 'LMN Publishers', 'position' => 'Editor', 'duration' => '2015-2019'],
                    ['company' => 'PQR Media', 'position' => 'Content Writer', 'duration' => '2020-Present'],
                ]),
            ],
        ];
        UserPortfolio::insert($data);
    }
}
