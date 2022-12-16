<html>
<wb-lang>
    [en]
    home = Home
    [ru]
    home = Главная
</wb-lang>

<wb-var parent="{{_parent.path}}" wb-if="'{{_parent.path}}'>''" else='/{{_form}}' />
<wb-var midcrumb='{{headerByPath({{_var.parent}})}}' wb-if="'{{_var.parent}}'>'/'" else='' />
<ol class="breadcrumb transparent pl-0">
    <li class="breadcrumb-item"><a href="/">{{_lang.home}}</a></li>
    <wb-foreach wb="from=_var.midcrumb&tpl=false">
        <li class="breadcrumb-item"><a href="{{path}}">{{header}}</a>
        </li>
    </wb-foreach>
    <li class="breadcrumb-item active" aria-current="page" wb-if="'{{path}}'==''">{{header}}</li>
</ol>
</html>