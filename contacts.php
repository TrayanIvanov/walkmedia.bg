<?php
    $SeoTitle = "Контакти - Walk Media";
    $SeoDescription = "Ходеща реклама - Реклама за вашия бизнес - Walkmedia - Свържете се с нас - Движещата се реклама представлява двустранен подвижен билборд, който се носи под формата на раница. Екип от обучени промоутъри разпространява Вашите промо-материали по предварително одобрен от Вас маршрут, комуникира с Вашите потенциални клиенти и със сигурност ангажира вниманието на стотици хора";
    $SeoKeywords = "walkmedia, реклама, ходеща реклама, билборд, ходещ билборд, промоутър, промоция, флаер, human bilboards, walk billboards, walk media, вървяща реклама, светещ билбоард, уникална реклама, рекламна кампания";
    
    include_once("includes/head.php");
    include_once("includes/header.php");
    include_once("includes/functions.php");

    $message = '';
    if (isset($_POST['send'])) {
        if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['message']) && !empty($_POST['message'])) {
            if (isValidEmail($_POST['email'])) {

                $message = "
                    Имате ново запитване от контактната форма на Walk Media<br /><br />
                    <strong>Име:</strong> ".stripslashes($_POST['name'])."<br />
                    <strong>Е-поща:</strong> ".stripslashes($_POST['email'])."<br />
                    <strong>Съобщение:</strong> ".stripslashes(nl2br($_POST['message']))."<br />
                ";

                $headers  = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=utf-8\r\n";

                $headers .= "From: Walk_Media \r\n";
                $headers .= "Reply-To: ".$_POST['email']." \r\n";
                $headers .= "Bcc: trayan.ivanov@gmail.com \r\n";

                $to = "trayan.ivanov@gmail.com";
                mail($to, "Запитване от контактна форма", $message, $headers);

                unset($_POST);
                $message = 'Съобщението е изпратено успешно';
            } else {
                $message = 'Невалидна е-поща';
            }
        } else {
            $message = 'Всички полета са задължителни';
        }
    }
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
        <form method="post" action="contacts.php">
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
                <input type="submit" name="send" value="Изпратете" class="btn btn-lg btn-block">
            </div>
            <p><?=$message?></p>
        </form>
    </div>
</div>

<?php
    include_once("includes/footer.php");
?>
