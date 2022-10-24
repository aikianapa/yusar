<edit header="Виджет Региональные представители">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
</edit>

<view>
<div class="container">
    <h3 class="mt-0">{{_lang.header}}</h3>
    <div class="row">
        <wb-foreach wb="table=dealers">
        <div class="col-12 col-md-6 col-lg-4 pb-3r">
            <h4 class="tx-20 font-weight-bold">{{region}}</h4>
            <div class="media-contacts d-flex">
                <a class="d-flex">
                    <img class="rounded-circle mr-1r" width="65" height="65" src="{{image.0.img}}" alt="{{name}}">
                </a>
                <div class="media-body">
                    {{name}}
                    <br>
                    <noindex>{{email}}</noindex>
                </div>
            </div>
        </div>
        </wb-foreach>
    </div>
</div>

<wb-lang>
[en]
header = Regional managers
[ru]
header = Региональные представители
</wb-lang>
</view>