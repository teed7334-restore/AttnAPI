<?php
require 'interface/IApi.php';

/**
 * 呼叫天心API專用程式
 */
class api implements IApi
{
    /**
     * API呼叫網址
     * @const URL
     */
    const URL = 'http://192.168.10.169/AttnPost2/AttnHttp.ashx';

    /**
     * API代入參數
     * @var array $params
     */
    public $params;

    /**
     * 建構式
     */
    public function __construct()
    {
        $this->params = [];
    }

    /**
     * 注入寫入銷貨單所需參數
     * @param  classes\insertSA $insertSA 注入的參數
     * @return api
     */
    public function appendInsertSAParam(classes\insertSA $insertSA) : api
    {
        $this->params[] = $insertSA;
        return $this;
    }

    /**
     * 注入取消銷貨單所需參數
     * @param  classes\cancelSO $cancelSO 注入的參數
     * @return api
     */
    public function appendCancelSOParam(classes\cancelSO $cancelSO) : api
    {
        $this->params[] = $cancelSO;
        return $this;
    }

    /**
     * 注入銷貨單轉入所需參數
     * @param  classes\insertSO $insertSO 注入的參數
     * @return api
     */
    public function appendInsertSOParam(classes\insertSO $insertSO) : api
    {
        $this->params[] = $insertSO;
        return $this;
    }

    /**
     * 注入發票轉出所需參數
     * @param  classes\getInvNo $getInvNo 注入的參數
     * @return api
     */
    public function appendGetInvNoParam(classes\getInvNo $getInvNo) : api
    {
        $this->params[] = $getInvNo;
        return $this;
    }

    /**
     * 注入商品資料轉入所需參數
     * @param  classes\updatePrdt $updatePrdt 注入的參數
     * @return api
     */
    public function appendUpdatePrdtParam(classes\updatePrdt $updatePrdt) : api
    {
        $this->params[] = $updatePrdt;
        return $this;
    }

    /**
     * 銷貨單轉入
     * @return array  $result API回傳資料
     */
    public function insertSO() : array
    {
        $params = [
            'PARA' => [(object) []],
            'MFPOS' => $this->params];
        $json = json_encode($params);

        $url = self::URL . '?mth=InsertSO';

        $result = $this->curl($url, $json);

        return $result;
    }

    /**
     * 取消銷貨單
     * @return array  $result API回傳資料
     */
    public function cancelSO() : array
    {
        $params = [
            'PARA' => [(object) []],
            'DATA' => $this->params];
        $json = json_encode($params);

        $url = self::URL . '?mth=CancelSO';

        $result = $this->curl($url, $json);

        return $result;
    }

    /**
     * 寫入銷貨單
     * @return array  $result API回傳資料
     */
    public function insertSA() : array
    {
        $params = [
            'PARA' => [(object) []],
            'DATA' => $this->params];
        $json = json_encode($params);

        $url = self::URL . '?mth=InsertSA';

        $result = $this->curl($url, $json);

        return $result;
    }

    /**
     * 發票轉出
     * @return array  $result API回傳資料
     */
    public function getInvNo() : array
    {
        $params = [
            'PARA' => [(object) []],
            'DATA' => $this->params];
        $json = json_encode($params);

        $url = self::URL . '?mth=GetInvNo';

        $result = $this->curl($url, $json);

        return $result;
    }

    /**
     * 貨品資料轉入
     * @return array  $result API回傳資料
     */
    public function updatePrdt() : array
    {
        $params = [
            'PARA' => [(object) []],
            'PRDT' => $this->params];
        $json = json_encode($params);

        $url = self::URL . '?mth=UpdatePrdt';

        $result = $this->curl($url, $json);

        return $result;
    }

    /**
     * 打API用CURL函式
     * @param  string $url    API網址
     * @param  string $json   JSON參數
     * @return array  $result API回傳資料
     */
    private function curl(string $url, string $json) : array
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($json))
        );

        $result = curl_exec($ch);
        $result = json_decode($result, true);

        if (null === $result) {
            return [];
        }

        return $result;
    }
}
