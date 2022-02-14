<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    //protected $fillable = ['title', 'excerpt', 'body', 'slug'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        /*if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('title', 'like', '%' . $filters['search'] . '%')
                  ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        }*/

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                             ->orWhere('body', 'like', '%' . $search . '%');
             });
         });

         $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
         });

         $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => 
                $query->where('username', $author)
            )
        );
    }

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
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
/*Post::create()([
    'title' => 'Judul Pertama',
    'category_id' => 1,
    'slug' => 'judul-pertama',
    'excerpt' => 'Lorem ipsum Pertama',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ea velit repellendus laboriosam officiis, dolor corporis molestiae aliquid minima molestias! Repellendus ut, sequi aperiam corrupti quas vitae mollitia inventore corporis beatae maxime saepe optio accusamus.</p><p> Dolores nam dolor autem nesciunt quam, voluptas repellendus illo nisi quisquam eveniet distinctio expedita non doloremque incidunt quaerat rem officia in possimus dolorem et dolorum! Eveniet sit quasi eligendi quidem modi? Quod hic recusandae cumque incidunt? Omnis perspiciatis dicta enim ut laudantium quisquam ea autem assumenda quo facere, natus quos sint laborum nulla pariatur recusandae non unde praesentium soluta aliquam earum eum libero delectus?</p><p> Ducimus dolor maxime amet, sed, officiis non facilis aperiam dicta soluta consectetur alias illum similique, provident aut nostrum. Dignissimos praesentium maxime sapiente dolor eius ipsam soluta quam ratione, voluptatem illum nulla iure nisi deleniti dolores quos excepturi repudiandae, aut necessitatibus libero? Ullam adipisci, voluptatum hic consequuntur nemo doloremque culpa neque porro?</p>'
])

$post->title = 'Judul Ketiga'
$post->category_id = 3
$post->slug = 'judul-ketiga'
$post->excerpt = 'Lorem ipsum Ketiga'
$post->body = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ea velit repellendus laboriosam officiis, dolor corporis molestiae aliquid minima molestias! Repellendus ut, sequi aperiam corrupti quas vitae mollitia inventore corporis beatae maxime saepe optio accusamus.</p><p> Dolores nam dolor autem nesciunt quam, voluptas repellendus illo nisi quisquam eveniet distinctio expedita non doloremque incidunt quaerat rem officia in possimus dolorem et dolorum! Eveniet sit quasi eligendi quidem modi? Quod hic recusandae cumque incidunt? Omnis perspiciatis dicta enim ut laudantium quisquam ea autem assumenda quo facere, natus quos sint laborum nulla pariatur recusandae non unde praesentium soluta aliquam earum eum libero delectus?</p><p> Ducimus dolor maxime amet, sed, officiis non facilis aperiam dicta soluta consectetur alias illum similique, provident aut nostrum. Dignissimos praesentium maxime sapiente dolor eius ipsam soluta quam ratione, voluptatem illum nulla iure nisi deleniti dolores quos excepturi repudiandae, aut necessitatibus libero? Ullam adipisci, voluptatum hic consequuntur nemo doloremque culpa neque porro?</p>'
$post->save()

Post::where('category_id', 1)->get()

Post::pluck('title')

Post::find(3)->update(['title' => 'Judul Ketiga])
*/