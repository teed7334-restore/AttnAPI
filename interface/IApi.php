<?php

interface IApi
{
    /**
     * 注入寫入銷貨單所需參數
     * @param  classes\insertSA $insertSA 注入的參數
     * @return api
     */
    public function appendInsertSAParam(classes\insertSA $insertSA) : api;

    /**
     * 注入取消銷貨單所需參數
     * @param  classes\cancelSO $cancelSO 注入的參數
     * @return api
     */
    public function appendCancelSOParam(classes\cancelSO $cancelSO) : api;

    /**
     * 注入銷貨單轉入所需參數
     * @param  classes\insertSO $insertSO 注入的參數
     * @return api
     */
    public function appendInsertSOParam(classes\insertSO $insertSO) : api;

    /**
     * 注入發票轉出所需參數
     * @param  classes\getInvNo $getInvNo 注入的參數
     * @return api
     */
    public function appendGetInvNoParam(classes\getInvNo $getInvNo) : api;

    /**
     * 注入商品資料轉入所需參數
     * @param  classes\updatePrdt $updatePrdt 注入的參數
     * @return api
     */
    public function appendUpdatePrdtParam(classes\updatePrdt $updatePrdt) : api;

    /**
     * 銷貨單轉入
     * @return array API回傳資料
     */
    public function insertSO() : array;

    /**
     * 取消銷貨單
     * @return array API回傳資料
     */
    public function cancelSO() : array;

    /**
     * 寫入銷貨單
     * @return array API回傳資料
     */
    public function insertSA() : array;

    /**
     * 發票轉出
     * @return array API回傳資料
     */
    public function getInvNo() : array;

    /**
     * 貨品資料轉入
     * @return array API回傳資料
     */
    public function updatePrdt() : array;
}
