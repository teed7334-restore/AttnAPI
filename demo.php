<?php
/**
 * 讀入相關檔案
 */
require 'classes/insertSO.php';
require 'classes/cancelSO.php';
require 'classes/insertSA.php';
require 'classes/getInvNo.php';
require 'classes/updatePrdt.php';
require 'api.php';

/**
 * 宣告相關物件
 */
use classes\insertSO;
use classes\cancelSO;
use classes\insertSA;
use classes\getInvNo;
use classes\updatePrdt;

/**
 * 初始化相關物件
 */
$insertSO = new insertSO;
$cancelSO = new cancelSO;
$insertSA = new insertSA;
$getInvNo = new getInvNo;
$updatePrdt = new updatePrdt;
$api = new api;

/**
 * 將資料注入元件
 */
$insertSO->OS_DD = date('Y-m-d');
$insertSO->OS_NO = 'TEST' . (string) time();
$insertSO->PO_DEP = 'S0003';
$insertSO->EST_DD = date('Y-m-d');
$insertSO->BIL_TYPE = '';
$insertSO->HREM = '';
$insertSO->ITM = 1;
$insertSO->PRD_NO = 'TEST' . (string) time();
$insertSO->PRD_NAME = '測試用商品' . date('YmdHis');
$insertSO->WH = '0000';
$insertSO->TAX_ID = '2';
$insertSO->QTY = 9999;
$insertSO->UP = 120;
$insertSO->TAX = 5;
$insertSO->AMTN = 100;
$insertSO->DIS_CNT = 0;
$insertSO->SAL_NO = 'EC';
$insertSO->REM = '表身備註';
$insertSO->CUS_NO = 'B00000';

$cancelSO->OS_NO = $insertSO->OS_NO;

$insertSA->OS_NO = $insertSO->OS_NO;
$insertSA->PS_DD = date('Y-m-d');
$insertSA->VOH_ID = '11';
$insertSA->BIL_TYPE = '';
$insertSA->ITM = '1;2;4;5';
$insertSA->OS_REM = 'OT0001;OT0002;;OT0003';
$insertSA->INV_SW = 'Y';
$insertSA->INV_DD = date('Y-m-d');
$insertSA->INV_YM = date('Ym');
$insertSA->AMT = 9999;
$insertSA->TAX = 5;
$insertSA->TAX_ID1 = '1';
$insertSA->TAX_ID2 = '1';
$insertSA->CHK_CODE = '';
$insertSA->UNI_NO_BUY = '';
$insertSA->TITLE_BUY = '';
$insertSA->UNI_NO_PAY = '';
$insertSA->TITLE_PAY = '';
$insertSA->INV_REM = '';
$insertSA->CARRIERID1 = '';
$insertSA->DANATE = '';
$insertSA->NPOBAN = '';
$insertSA->RAND_NO = '';

$getInvNo->OS_NO = $insertSO->OS_NO;

$updatePrdt->PRD_NO = 'A01';
$updatePrdt->NAME = '衣服';
$updatePrdt->SNM = '衣服';
$updatePrdt->SPC = '';
$updatePrdt->IDX1 = '1';
$updatePrdt->SPC_TAX = 5;
$updatePrdt->UT = '1';
$updatePrdt->KND = '1';

/**
 * 呼叫API
 */
$result = $api
    ->appendInsertSOParam($insertSO)
    ->insertSO();

$result = $api
    ->appendCancelSOParam($cancelSO)
    ->cancelSO();

$result = $api
    ->appendInsertSAParam($insertSA)
    ->insertSA();

$result = $api
    ->appendGetInvNoParam($getInvNo)
    ->getInvNo();

$result = $api
    ->appendUpdatePrdtParam($updatePrdt)
    ->updatePrdt();
