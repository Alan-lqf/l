<?php


use think\Route;

Route::get('/', 'index/Index/index');


Route::get('banner/:id', 'api/BannerController/getBanner');

Route::get('theme', 'api/ThemeController/getSimpleList');
Route::get('theme/:id', 'api/ThemeController/getComplexOne');

Route::get('product/recent', 'api/ProductController/getRecent');
Route::get('product/by_category', 'api/ProductController/getAllInCategory');

Route::get('category/all', 'api/CategoryController/getAllCategories');
