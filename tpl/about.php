<html lang="ru">
<wb-include wb-tpl="head.inc.php" />
<body>
    <wb-var bkg="header-2.jpg" />
    <wb-include wb-tpl="header.inc.php" />
    <div class="container mb-2r">

<wb-multilang name="mlfld" wb-lang="en,ru,jp">
<form>
<input type="text" class="form-control" name="test">
<wb-multiinput name="mulp">
    <input name="m1">
    <input name="m2">

</wb-multiinput>
</form>
</wb-multilang>
    <h3>{{prop.data.ru.name}}</h3>
    </div>
    <wb-include wb-tpl="block-images.inc.php" />
    <wb-include wb-tpl="block-text.inc.php" class="pb-3r" />
    <wb-include wb-tpl="footer.inc.php" />
</body>
<wb-lang>
    [en]
    [ru]
</wb-lang>
</html>