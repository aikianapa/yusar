<edit header="Только текст">
    <div class="pb-5 mb-5">
        <div>
            <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
        </div>
        <div class="mb-1">
            <textarea class="form-control" rows="auto" name="text" placeholder="Текст" wb-module="langinp"></textarea>
        </div>
    </div>
</edit>

<view>
    <div class="text-break">{{text.{{_sess.lang}}}}</div>
</view>