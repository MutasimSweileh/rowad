<?
$plang = (isset($_GET["plang"]) ? "arabic" : "");
include_once("classes/core.php");
$core = new core;
?>
<style>
    <?
    $cartlist = $core->Sion("cartlist");
    $variable = $core->getData('products', array("in" => $cartlist));
    ?>.badge2:after {
        content: "<?= count($variable) ?>";
        position: absolute;
    }
</style>
<a href="<?= $core->getPageUrl("order" . $plang) ?>" title="">
    <div class="main-ico"><span class="fab fa-shopping-cart badge2"></span></div>
</a>