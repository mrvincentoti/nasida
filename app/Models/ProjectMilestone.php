<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMilestone extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'project_id', 'milestone_date'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
