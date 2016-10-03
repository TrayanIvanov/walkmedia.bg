<?php
    $SeoTitle = "Галерия - WalkMedia";
    $SeoDescription = "Walkmedia - Ходеща реклама - Реклама за вашия бизнес - Информация за ходеща реклама - Движещата се реклама представлява двустранен подвижен билборд, който се носи под формата на раница. Екип от обучени промоутъри разпространява Вашите промо-материали по предварително одобрен от Вас маршрут, комуникира с Вашите потенциални клиенти и със сигурност ангажира вниманието на стотици хора";
    $SeoKeywords = "walkmedia, реклама, ходеща реклама, билборд, ходещ билборд, промоутър, промоция, флаер, human bilboards, walk billboards, walk media, вървяща реклама, светещ билбоард, уникална реклама, рекламна кампания";

    $images = [
        '1.jpg',
        '2.jpg',
        '3.jpg',
        '4.jpg',
        '5.jpg',
        '6.jpg',
        '7.jpg',
        '8.jpg',
        '9.jpg',
        '10.jpg',
        '11.jpg',
        '12.jpg',
    ];
    
    include_once("includes/head.php");
    include_once("includes/header.php");
?>

<div class="row gallery">
    <div class="col-lg-12">
        <h2>Галерия</h2><br>
    </div>

    <?php foreach ($images as $image) { ?>
        <div class="col-sm-4 col-xs-6">
            <a href="images/gallery/<?=$image?>" class="fresco" data-fresco-group="frescos">
                <img src="images/gallery/<?=$image?>" class="img-thumbnail" />
            </a>
        </div>
    <?php } ?>
</div>

<?php
    include_once("includes/footer.php");
?>
