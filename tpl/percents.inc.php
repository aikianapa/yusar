<wb-var field="{{_env.tagparams.field}}"/>
<div class="columns percent-columns">
<wb-var delay="500" />
        <wb-foreach wb="from={{_var.field}}&tpl=false" wb-filter="dsc_prc>>=0">
            <wb-var lns="{{intval(0.3*{{dsc_prc}})}}" />
            <wb-var delay="{{_var.delay-100}}" />
            <div class="column-{{_ndx}}" data-aos="zoom-in" data-aos-offset='-300'
                data-aos-delay="1000}">
                <span class="number-{{_ndx}} {{dsc_col}}" data-max="{{dsc_prc}}">0</span>
                <wb-foreach wb="count={{_var.lns}}&tpl=false">
                    <wb-var dly="{{_var.lns-_ndx}}" />
                    <wb-var dly="{{_var.dly*100}}" />
                    <wb-var dly="{{intval(intval({{_var.delay}})+intval({{_var.dly}}))}}" />
                    <div class="hr-{{_parent.dsc_col}}" data-aos="zoom-in" data-aos-offset='-300'
                        data-aos-delay="{{intval({{_var.dly}})}}">
                    </div>
                </wb-foreach>
            </div>
        </wb-foreach>
    </div>