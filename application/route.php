<?php


use think\Route;

Route::get('/', 'index/Index/index');


Route::get('banner/:id', 'api/BannerController/getBanner');

Route::get('theme', 'api/ThemeController/getSimpleList');
