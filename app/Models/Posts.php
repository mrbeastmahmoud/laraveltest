<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];
    protected $guarded = ['id']; //the oposite of $fillable

    //  protected $fillable=['title','excerpt','body'];
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters)
    {//Posts::newQuery()->filter() its like saying where(['asdasd'like '$'.adsadad.'$'])
        $query->when($filters['search'] ?? false, fn($query, $search) => $query
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%'));

        $query->when($filters['category'] ?? false, fn($query, $category) => //            $query->whereExists(fn($query)=>$query->from('categories')->whereColumn('categories.id','posts.category_id')->where('categories.slug',$category)));
        $query->whereHas('category', fn($query) => $query->where('slug', $category)));
        $query->when($filters['authors'] ?? false, fn($query, $authors) =>
        $query->whereHas('author',fn($query) => $query->where('email', $authors))
        );
    }

    public function author()
    { //we can named the function to user and php asume that the fkey is user_id then we go to the view and cahnge it from author to user
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class,'post_id');
    }

}
