<?php
$content = "Сижу за решеткой в темнице сырой.
Вскормленный в неволе орел молодой,
Мой грустный товарищ, махая крылом,
Кровавую пищу клюет под окном,
Клюет, и бросает, и смотрит в окно,
Как будто со мною задумал одно.
Зовет меня взглядом и криком своим
И вымолвить хочет: «Давай улетим!";
$url = "https://ilibrary.ru/text/246/p.1/index.html";
$text = mb_substr($content,0,139);
$text_link = explode(" ",$text);
$b = count($text_link);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тестовое задание</title>
</head>
<body>
    <div class="text_link"><?php echo $text;?>
        <a href="<?php echo $url;?>"><?php echo$text_link[$b - 2] . " " .  $text_link[$b - 1] . "...";?></a>
    </div>
</body>
</html>

