<?php
namespace App\Services;

use App\Repositories\Interfaces\ShopAccessInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;

class ShopService
{
    /** @var ShopAccessInterface  */
    protected $shopAccessInterface;

    public function __construct(ShopAccessInterface $shopAccessInterface)
    {
        $this->shopAccessInterface = $shopAccessInterface;
    }

    /**
     * 店舗登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Models\Shop
     */
    public function registerShop(Request $request)
    {
        $shop = DB::transaction(function () use ($request) {
            // 店舗登録
            return $this->shopAccessInterface->create($request);
        });

        return $shop;
    }

    /**
     * 店舗更新
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $shopId
     * @return int update record count
     */
    public function updateShop(Request $request, $shopId)
    {
        $ret = DB::transaction(function () use ($request, $shopId) {
            // 店舗データ取得
            $shop = $this->shopAccessInterface->findShopById($shopId);

            // 店舗更新
            return $this->shopAccessInterface->update($request, $shop);
        });

        return $ret;
    }
}