<edit header="Изображения для новости">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div>
        <wb-module wb="module=filepicker&mode=multiple&width=150&height=100" wb-path="/uploads/news" name="images" />
    </div>
</edit>

<view>
    <wb-include wb-tpl="widget-images.inc.php" />
</view>