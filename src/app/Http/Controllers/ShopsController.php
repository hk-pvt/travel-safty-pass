<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Services\ShopService;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    /** @var ShopService  */
    protected $shopService;

    public function __construct(ShopService $shopService)
    {
        $this->shopService = $shopService;
    }

    /**
     * ログイン認証
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 店舗登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerShop(Request $request)
    {
        $this->shopService->registerShop($request);

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 利用規約取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getPolicy(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * QRコード取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getQrCode(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 店舗情報取得
     *
     * @param  int  $shopId
     * @return \Illuminate\Http\Response
     */
    public function getShopDetail($shopId)
    {
        

        if ($shop) {
            return response()->jsonp('jsonp_data', [
                'data' => $shop
            ], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->jsonp('jsonp_data', [
                'message' => 'Store not found',
            ], 400);
        }
    }

    /**
     * 店舗情報更新
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $shopId
     * @return \Illuminate\Http\Response
     */
    public function updateShop(Request $request, $shopId)
    {
        $shop = $this->shopService->updateShop($request, $shopId);

        if (0 < $shop) {
            return response()->json([
                'data' => '',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Store not found',
            ], 400);
        }
    }

    /**
     * クーポン登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerCoupon(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }
}
