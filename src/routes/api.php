<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/**
 * ユーザ（旅行者）用
 */
// ログイン認証
Route::post('/user/login', 'UsersController@login');
// ユーザ登録
Route::post('/user', 'UsersController@registerUser');
// 利用規約取得
Route::get('/user/policy', 'UsersController@getPolicy');
// セルフチェック登録
Route::post('/user/self', 'UsersController@registerSelfCheck');
// セルフチェック結果取得
Route::get('/user/self', 'UsersController@getSelfCheck');
// ユーザ来訪登録
Route::post('/user/visit', 'UsersController@registerVisit');
// 体温登録
Route::post('/user/temperature', 'UsersController@registerTemperature');
// クーポン取得
Route::get('/user/coupon', 'UsersController@getCoupon');
// 店舗一覧取得
Route::get('/user/shop', 'UsersController@getShopList');
// 店舗詳細取得
Route::get('/user/shop/{shop_id}', 'UsersController@getShopDetail');
// 罹患通知（濃厚接触）登録
Route::post('/user/affected/contact', 'UsersController@registerAffectedContact');
// 罹患通知（陽性）登録
Route::post('/user/affected/positive', 'UsersController@registerAffectedPositive');
// 行動指針情報取得
Route::get('/user/guideline', 'UsersController@getGuideline');
// 接触可能性状況取得
Route::get('/user/contact/status', 'UsersController@getContactPossibilityStatus');
// 行動履歴取得
Route::get('/user/history', 'UsersController@getActionHistory');

/**
 * 店舗用
 */
// ログイン認証
Route::post('/shop/login', 'ShopsController@login');
// 店舗登録
Route::post('/shop', 'ShopsController@registerShop');
// 利用規約取得
Route::get('/shop/policy', 'ShopsController@getPolicy');
// QRコード取得
Route::get('/shop/qrcode/{shop_id}', 'ShopsController@getQrCode');
// 店舗情報取得
Route::get('/shop/{shop_id}', 'ShopsController@getShopDetail');
// 店舗情報更新
Route::post('/shop/{shop_id}', 'ShopsController@updateShop');
// クーポン登録
Route::post('/shop/coupon', 'ShopsController@registerCoupon');