<?php


use think\Route;

Route::get('/', 'index/Index/index');


Route::get('api/banner/:id', 'api/BannerController/getBanner');
