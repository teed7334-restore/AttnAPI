<?php
namespace classes;

/**
 * 貨品資料轉入
 */
class updatePrdt
{
    /**
     * 貨品代號 string(30) required
     * @var string $PRD_NO
     */
    public $PRD_NO;

    /**
     * 名稱 string(100) required
     * @var string $NAME
     */
    public $NAME;

    /**
     * 英文名稱 string(100)
     * @var string $NAME_ENG
     */
    public $NAME_ENG;

    /**
     * 簡稱 string(20)
     * @var string $SNM
     */
    public $SNM;

    /**
     * 規格 memo
     * @var string $SPC
     */
    public $SPC;

    /**
     * 中類代號 string(10)
     * @var string $IDX1;
     */
    public $IDX1;

    /**
     * 商品稅率 int
     * @var int $SPC_TAX
     */
    public $SPC_TAX;

    /**
     * 主單位 string(8)
     * @var string $UT
     */
    public $UT;

    /**
     * 商品大類 string(1) 商品大類: 1.商品 2.製成品 3.半成品 4.原料 5.物料 6.下腳品 7.包裝物 A.人工 B.費用 C.外包
     * @var string $KND
     */
    public $KND;
}
