<?php
namespace classes;

/**
 * 供銷單轉入容器
 * @package classes
 */
class insertSO
{

    /**
     * 受訂日期 date YYYY-MM-DD required
     * @var string $OS_DD
     */
    public $OS_DD;

    /**
     * 單號 string(20) required
     * @var string $OS_NO
     */
    public $OS_NO;

    /**
     * 部門代號 string(8) required 請提供相對映於天心系統部門代號畫面裡的部門代號
     * @var string $PO_DEP
     */
    public $PO_DEP;

    /**
     * 預交日 date YYYY-MM-DD
     * @var string $EST_DD
     */
    public $EST_DD;

    /**
     * 單據類別 string(2)
     * @var string $BIL_TYPE
     */
    public $BIL_TYPE;

    /**
     * 表頭備註 memo
     * @var string $HREM 請提供相對映於ERP內之單據類別代號
     */
    public $HREM;

    /**
     * 項次 int
     * @var int $ITM
     */
    public $ITM;

    /**
     * 貨品代號 string(30) required 請提供相對映於天心倉庫資料畫面裡的貨品代號
     * @var string $PRD_NO
     */
    public $PRD_NO;

    /**
     * 貨品名稱 string(40) required 請提供相對映於天心倉庫資料畫面裡的貨品名稱
     * @var string $PRD_NAME
     */
    public $PRD_NAME;

    /**
     * 庫位 string(12) required 請提供相對映於天心倉庫資料畫面裡的倉庫代號
     * @var string $WH
     */
    public $WH;

    /**
     * 扣稅類別 string(1) required 扣稅類別(1.不計稅 2.應稅內含 3.應稅外加)
     * @var string $TAX_ID
     */
    public $TAX_ID;

    /**
     * 數量 int
     * @var int $QTY
     */
    public $QTY;

    /**
     * 單價 float
     * @var float $UP
     */
    public $UP;

    /**
     * 稅額 float 提供表身折扣的未稅本位幣稅額
     * @var float $TAX
     */
    public $TAX;

    /**
     * 未稅金額 float 提供表身折扣的未稅本位幣金額
     * @var float $AMTN
     */
    public $AMTN;

    /**
     * 表身折扣 float 若有針對表身單品項折扣請提供折扣率
     * @var float $DIS_CNT
     */
    public $DIS_CNT;

    /**
     * 業務員代號 string(12) 請提供相對映於天心業務員資料畫面裡的業務員代號
     * @var string $SAL_NO
     */
    public $SAL_NO;

    /**
     * 表身備註 memo
     * @var string $REM
     */
    public $REM;

    /**
     * 客戶代號 string(12) 請提供相對映於天心客廠資料畫面裡的客戶代號
     * @var strign $CUS_NO
     */
    public $CUS_NO;
}
