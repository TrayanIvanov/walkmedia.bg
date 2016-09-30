<?php
    $SeoTitle = "Контакти - Walk Media";
    $SeoDescription = "Ходеща реклама - Реклама за вашия бизнес - Walkmedia - Свържете се с нас - Движещата се реклама представлява двустранен подвижен билборд, който се носи под формата на раница. Екип от обучени промоутъри разпространява Вашите промо-материали по предварително одобрен от Вас маршрут, комуникира с Вашите потенциални клиенти и със сигурност ангажира вниманието на стотици хора";
    $SeoKeywords = "walkmedia, реклама, ходеща реклама, билборд, ходещ билборд, промоутър, промоция, флаер, human bilboards, walk billboards, walk media, вървяща реклама, светещ билбоард, уникална реклама, рекламна кампания";
    
    include_once("includes/head.php");
    include_once("includes/header.php");
?>

<div class="row">
    <div class="col-lg-12">
        <br>
        <p>
            Ако желаете да се свържете с нас може да използвате и контактната форма.<br>
            Ще отговорим на вашите въпроси по най-бързия възможен начин на посочената електронна поща.
        </p>
        <br>
    </div>

    <div class="col-lg-12 contact-form">
        <form method="post" action="">
            <div class="form-group">
                <input type="text" name="name" value="" placeholder="Име" class="form-control">
            </div>

            <div class="form-group">
                <input type="text" name="email" value="" placeholder="Е-поща" class="form-control">
            </div>

            <div class="form-group">
                <textarea rows="7" name="message" value="" placeholder="Съобщение" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-block">Изпратете</button>
            </div>
        </form>
    </div>
</div>

<?php
    include_once("includes/footer.php");
?>
