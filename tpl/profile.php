<html>
<wb-include wb-tpl="head.inc.php" />

<body>
    <wb-var bkg="header-4.jpg" />
    <wb-include wb-tpl="header.inc.php" />

    <div class="container mb-3r mt-3r block-account" id="Profile">
        <ul class="nav nav-stacked">
            <li class="nav-item">
                <a href="#TabProfile" data-toggle="tab" class="nav-link active">{{_lang.profile}}</a>
            </li>
            <li class="nav-item">
                <a href="#TabArticles" data-toggle="tab" class="nav-link">{{_lang.articles}}</a>
            </li>
            <li class="nav-item">
                <a href="#TabVideo" data-toggle="tab" class="nav-link">{{_lang.video}}</a>
            </li>
            <li class="nav-item">
                <a href="#TabDocs" data-toggle="tab" class="nav-link">{{_lang.docs}}</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="TabProfile">
                <wb-include wb-tpl="profile-form.inc.php" />
            </div>
            <div class="tab-pane fade" id="TabArticles">
                <wb-include wb-tpl="profile-articles.inc.php" />
            </div>
            <div class="tab-pane fade" id="TabVideo">
                <wb-include wb-tpl="profile-video.inc.php" />
            </div>
            <div class="tab-pane fade" id="TabDocs">
                <wb-include wb-tpl="widget-uploads.inc.php" class="pt-3r" />
            </div>

        </div>
    </div>


    <wb-include wb-tpl="footer.inc.php" />
</body>
<wb-lang>
    [en]
    profile = Profile
    articles = Articles
    video = Video
    docs = Docs
    [ru]
    profile = Профиль
    articles = Статьи
    video = Видео
    docs = Документы
</wb-lang>
</html>