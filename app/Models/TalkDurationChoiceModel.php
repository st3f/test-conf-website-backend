<?php

namespace App\Models;

use CodeIgniter\Model;

class TalkDurationChoiceModel extends Model
{
    protected $table = 'TalkDurationChoice';
    protected $allowedFields = [
        'duration',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $useTimestamps = true;
    protected array $casts = [
        'duration' => 'int',
    ];

    public function getAll(): array
    {
        return $this->orderBy('duration')->findAll();
    }
}
