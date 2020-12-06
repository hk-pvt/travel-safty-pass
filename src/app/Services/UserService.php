<?php
namespace App\Services;

use App\Repositories\Interfaces\ShopAccessInterface;
use App\Repositories\Interfaces\UserAccessInterface;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class UserService
{
    /** @var ShopAccessInterface  */
    protected $shopAccessInterface;

    /** @var UserAccessInterface  */
    protected $userAccessInterface;

    public function __construct(UserAccessInterface $userAccessInterface,
                                ShopAccessInterface $shopAccessInterface)
    {
        $this->userAccessInterface = $userAccessInterface;
        $this->shopAccessInterface = $shopAccessInterface;
    }

    /**
     * 店舗一覧取得
     *
     * @return \Illuminate\Support\Collection
     */
    public function getShopList()
    {
        $shops = $this->shopAccessInterface->findShopAll();

        return $shops->map(function ($shop) {
            return collect([
                'shop_id' => $shop->id,
                'user_name' => $shop->user_name,
                'category_name' => $shop->category->category_name,
            ]);
        });
    }

    /**
     * 店舗詳細取得
     *
     * @param  int  $shopId
     * @return \Illuminate\Support\Collection
     */
    public function getShopDetail($id)
    {
        $shop = $this->shopAccessInterface->findShopById($id);

        if ($shop) {
            // データが取得できた場合
            return collect([
                'shop_id' => $shop->id,
                'user_name' => $shop->user_name,
                'category_name' => $shop->category->category_name,
            ]);
        }
        
        // データが取得できない場合
        return collect([
            'shop_id' => '',
            'user_name' => '',
            'category_name' => '',
        ]);  
    }   
}