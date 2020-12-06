<?php

namespace App\Repositories;

use App\Models\Shop;
use App\Repositories\Interfaces\ShopAccessInterface;
use Illuminate\Http\Request;

class ShopRepository implements ShopAccessInterface
{
    /**
     * 店舗データ全検索
     * 
     * @return \Illuminate\Support\Collection
     */
    public function findShopAll()
    {
        return Shop::where('del_flg', 0)->get();
    }

    /**
     * 店舗データID検索
     * 
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public function findShopById($id)
    {
        return Shop::where('id', $id)
                    ->where('del_flg', 0)
                    ->first();
    }
    
    /**
     * 店舗データ登録
     */
    public function create(Request $request)
    {   
        $shopRequest = $this->getShopParams($request);

        return Shop::create(array_merge([
            'passwordh' => 'abc',
            'del_flg' => false,
        ], $shopRequest));
    }

    /**
     * 店舗データ更新
     */
    public function update(Request $request, Shop $shop)
    {
        $shopRequest = $this->getShopParams($request);
        return $shop->update($shopRequest);
    }

    protected function getShopParams(Request $request)
    {
        $shop = Shop::make();
        $parameters = $request->only($shop->getFillable());
        return $parameters;
    }
}