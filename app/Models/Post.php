<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Kyslik\ColumnSortable\Sortable;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Post extends Model
{
    // use HasSlug;
    use HasFactory;
    use Sluggable;

    protected $guarded = [
        'id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true

            ]
        ];
    }
    protected static function boot()
    {
        parent::boot();

        static::updating(function ($post) {
            $post->slug = SlugService::createSlug($post, 'slug', $post->title);
        });
    }
    public function tags():BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags','post_id','tag_id');
    }
    public $sortable = [
        'title',
    ];

}
