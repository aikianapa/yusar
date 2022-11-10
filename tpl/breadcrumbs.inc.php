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
    <li class="breadcrumb-item" wb-if="'{{_var.midcrumb}}'>''"><a href="{{_var.parent}}">{{_var.midcrumb}}</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">{{header}}</li>
</ol>
</html>