<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Каталог');
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog", "", [])?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>