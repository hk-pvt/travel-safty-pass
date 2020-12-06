<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UsersController extends Controller
{
    /** @var UserService  */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
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
     * ユーザ登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerUser(Request $request)
    {
        

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
     * セルフチェック登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerSelfCheck(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * セルフチェック結果取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getSelfCheck(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * ユーザ来訪登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerVisit(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 体温登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerTemperature(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * クーポン取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCoupon(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 店舗一覧取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getShopList(Request $request)
    {
        $shops = $this->userService->getShopList();
        
        return response()->jsonp('jsonp_data', [
            'data' => $shops,
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 店舗詳細取得
     *
     * @param  int  $shopId
     * @return \Illuminate\Http\Response
     */
    public function getShopDetail($shopId)
    {
        $shop = $this->userService->getShopDetail($shopId);

        return response()->jsonp('jsonp_data', [
            'data' => $shop,
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 罹患通知（濃厚接触）登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerAffectedContact(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 罹患通知（陽性）登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerAffectedPositive(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 行動指針情報取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getGuideline(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 接触可能性状況取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getContactPossibilityStatus(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * 行動履歴取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getActionHistory(Request $request)
    {
        

        return response()->jsonp('jsonp_data', [
            'data' => '',
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }
}
