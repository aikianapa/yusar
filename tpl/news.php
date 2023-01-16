<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body class="loading">
    <wb-var bkg="header-4.jpg" />
    <wb-include wb-tpl="header.inc.php" />

   <div class="container pt-3r">
    <wb-data wb="table={{_route.table}}&item={{_route.item}}">
        <div class="row">
            <div class="col-md-8">
                <wb-module wb="module=yonger&mode=render" />
            </div>
            <wb-jq wb="$dom->find('section.block-content')->addClass('mt-3r');"/>
            <div class="col-md-4">
                <div class="row  p-1r  pt-0" >
                    <div class="col-12 pb-2r bg-sky" style="border-radius: 5px">
                        <h3 class="col-12 mt-1r tx-20 font-weight-bold" style="margin-bottom: 0;">{{_lang.othernews}}</h3>
                        <wb-foreach wb="table=news&limit=5&sort=date:d&render=server&offset=-100" wb-filter="{'active':'on','id':{'$ne':'{{_route.item}}'}}">
                            <div class="col-12">
                                <a href="/news/{{wbFurlGenerate({{header}})}}" style="color: #333333;">
                                    <div class="media-news d-flex border-bottom">
                                        <img class="mt-1" width="60" height="60" data-src="/thumbc/60x60/src{{cover}}" alt="">
                                        <div class="media-body">
                                            <p class="tx-16">{{header}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </wb-foreach>
                        <div class="col-12">
                            <a class="link-news" href="/news" style="margin-top: 20px">
                                {{_lang.allnews}}
                                <div class="arrow-mask ml-10"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </wb-data>
    </div>
    <wb-include wb-tpl="footer.inc.php" class="footer--news-show"/>
    <wb-lang>
        [en]
        othernews = "Other news"
        allnews = "All news"
        [ru]
        othernews = "Другие новости"
        allnews = "Все новости"
    </wb-lang>
</body>

</html>