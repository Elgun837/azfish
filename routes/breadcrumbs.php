<?php
use App\Models\Catalog\Product;
use App\Models\Catalog\Category;
use App\Models\Catalog\Manufacturer;
use Diglactic\Breadcrumbs\Breadcrumbs;
use App\Models\Page;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(trans('default.text_home'), route('home'));
});

//Catalog Breadcrumbs

Breadcrumbs::for('catalog', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');

    $trail->push(trans('default.text_catalog'), route('catalog'));
});

Breadcrumbs::for('category', function (BreadcrumbTrail $trail, Category $category): void {
    $trail->parent('catalog');

    $category = $category->translate(app()->getLocale(), 'en');
    
    $trail->push($category->name, route('category', $category->slug));
});

Breadcrumbs::for('manufacturer.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('catalog');

    $trail->push(trans('default.brands'), route('manufacturer.index'));
});

Breadcrumbs::for('manufacturer.show', function (BreadcrumbTrail $trail, Manufacturer $manufacturer): void {
    $trail->parent('manufacturer.index');

    $trail->push($manufacturer->name, route('manufacturer.show', $manufacturer->slug));
});

Breadcrumbs::for('product', function (BreadcrumbTrail $trail, Product $product): void {
    
    $trail->parent('catalog');

    $product = $product->translate(app()->getLocale(), 'en');

    $category_info = Category::where('id', $product->categories)->first();

    if($category_info) {
        $category = $category_info->translate(app()->getlocale(), 'en');
        $trail->push($category->name, route('category', $category->slug));
    }    

    $trail->push($product->name, route('product', $product->slug));
});

//Post Breadcrumbs
Breadcrumbs::for('post.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');

    $trail->push('', route('post.index'));
});

Breadcrumbs::for('page', function (BreadcrumbTrail $trail, Page $page): void {
    $trail->parent('home');

    $page = $page->translate(app()->getLocale(), 'en');

    $trail->push($page->title, route('page', $page->slug));
});