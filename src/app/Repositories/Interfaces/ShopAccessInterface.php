<?php
namespace App\Repositories\Interfaces;

use App\Models\Shop;
use Illuminate\Http\Request;

interface ShopAccessInterface
{
    public function findShopAll();
    public function findShopById($id);
    public function create(Request $request);
    public function update(Request $request, Shop $shop);
}