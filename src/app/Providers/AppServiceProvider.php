<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Relation::enforceMorphMap([
            'noname' => 'App\Models\Noname',
            'address' => 'App\Models\Address',
            'age' => 'App\Models\Age',
            'alt' => 'App\Models\Alt',
            'catalog' => 'App\Models\Catalog',
            'category' => 'App\Models\Category',
            'date' => 'App\Models\Date',
            'description' => 'App\Models\Description',
            'feedback' => 'App\Models\FeedBack',
            'file' => 'App\Models\File',
            'flag' => 'App\Models\Flag',
            'head' => 'App\Models\Head',
            'image' => 'App\Models\Image',
            'link' => 'App\Models\Link',
            'mail' => 'App\Models\Mail',
            'menu' => 'App\Models\Menu',
            'phone' => 'App\Models\Phone',
            'post' => 'App\Models\Post',
            'price' => 'App\Models\Price',
            'product' => 'App\Models\Product',
            'project' => 'App\Models\Project',
            'property' => 'App\Models\Property',
            'rubric' => 'App\Models\Rubric',
            'seodescription' => 'App\Models\Seodescription',
            'seotitle' => 'App\Models\Seotitle',
            'service' => 'App\Models\Service',
            'team' => 'App\Models\Team',
            'text' => 'App\Models\Text',
            'title' => 'App\Models\Title',
            'unit' => 'App\Models\Unit',
            'users' => 'App\Models\Users',
            'video' => 'App\Models\Video',
            'resource' => 'App\Models\Resource',
            'seoquery' => 'App\Models\SeoQuery',
            'position' => 'App\Models\Position',
        ]);
    }
}
