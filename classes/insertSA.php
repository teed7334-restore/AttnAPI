<?php
namespace classes;

/**
 * 銷貨單轉入
 */
class insertSA
{
    /**
     * 單號 string(20) required
     * @var string $OS_NO
     */
    public $OS_NO;

    /**
     * 銷貨日期 date YYYY-MM-DD
     * @var string $PS_DD
     */
    public $PS_DD;

    /**
     * 傳票模板 string(2) 請提供相對應於ERP內之傳票模板代號
     * @var string $VOH_ID
     */
    public $VOH_ID;

    /**
     * 單據類別 string(2)
     * @var string $BIL_TYPE
     */
    public $BIL_TYPE;

    /**
     * 項次 string(100) required 請使用分號「;」做分隔符號
     * @var string $ITM
     */
    public $ITM;

    /**
     * 票據號 string(500) required 請使用分號「;」做分隔符號, 數量與項次相互對應
     * @var string $OS_REM
     */
    public $OS_REM;

    /**
     * 是否開立發票 string(1) required 是否開立發票(Y開立 N不開立)
     * @var string $INV_SW
     */
    public $INV_SW;

    /**
     * 發票日期 date YYYY-MM-DD
     * @var string $INV_DD
     */
    public $INV_DD;

    /**
     * 申報期別 int
     * @var int $INV_YM
     */
    public $INV_YM;

    /**
     * 銷項金額 float
     * @var float $AMT
     */
    public $AMT;

    /**
     * 稅額 float
     * @var float $TAX
     */
    public $TAX;

    /**
     * 稅別 string(1) 稅別(1應稅 2零稅 3免稅)
     * @var string $TAX_ID1
     */
    public $TAX_ID1;

    /**
     * 扣稅別 string(1) 扣抵別(1可扣抵 2不可扣抵)
     * @var string $TAX_ID2
     */
    public $TAX_ID2;

    /**
     * 檢查碼 string(10)
     * @var string $CHK_CODE
     */
    public $CHK_CODE;

    /**
     * 買受人統一編號 string(20)
     * @var string $UNI_NO_BUY
     */
    public $UNI_NO_BUY;

    /**
     * 買受人抬頭 string(80)
     * @var string $TITLE_BUY
     */
    public $TITLE_BUY;

    /**
     * 營業人統一編號 string(20)
     * @var strign $UNI_NO_PAY
     */
    public $UNI_NO_PAY;

    /**
     * 營業人抬頭 string(80)
     * @var string $TITLE_PAY
     */
    public $TITLE_PAY;

    /**
     * 發票備註 memo
     * @var string $INV_REM
     */
    public $INV_REM;

    /**
     * 載具顯碼 string(64)
     * @var string $CARRIERID1
     */
    public $CARRIERID1;

    /**
     * 捐贈 string(1) 捐贈(Y 捐贈 N不捐贈)
     * @var string $DANATE
     */
    public $DANATE;

    /**
     * 愛心碼 string(7)
     * @var string $NPOBAN
     */
    public $NPOBAN;

    /**
     * 防偽隨機碼 string(4)
     * @var string $RAND_NO
     */
    public $RAND_NO;
}
