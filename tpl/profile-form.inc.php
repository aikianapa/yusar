<div class="form-profile">
    <h3 class="mt-2r tx-28 font-weight-bold">{{_lang.persinfo}}</h3>
    <form method="post" class="row">
        <div class="form-group col-md-6">
          <label>{{_lang.fullname}}:</label>
          <input type="text" class="form-control form-control-sm" name="fullname" >
        </div>
        <div class="form-group col-md-6">
          <label>{{_lang.birthdate}}:</label>
          <wb-include wb-snippet="datepicker" class="form-control form-control-sm" name="birthdate" />
        </div>
        <div class="form-group col-md-6">
          <label>{{_lang.region}}:</label>
          <input type="text" class="form-control form-control-sm" name="region" >
        </div>
        <div class="form-group col-md-6">
          <label>{{_lang.city}}:</label>
          <input type="text" class="form-control form-control-sm" name="city" >
        </div>
        <div class="form-group col-md-6">
          <label>{{_lang.organization}}:</label>
          <input type="text" class="form-control form-control-sm" name="organization" >
        </div>
        <div class="form-group col-md-6">
          <label>{{_lang.department}}:</label>
          <input type="text" class="form-control form-control-sm" name="department" >
        </div>
        <div class="form-group col-md-6">
          <label>{{_lang.position}}:</label>
          <input type="text" class="form-control form-control-sm" name="position" >
        </div>
    </form>


</div>

<wb-lang>
[en]
persinfo = Personal Information
fullname = Full Name
birthdate = Birthdate
region = Region
city = City
organization = Organization
department = Department
position = Position
[ru]
persinfo = Персональная информация
fullname = ФИО
birthdate = Дата рождения
region = Регион
city = Город
organization = Организация
department = Департамент
position = Должность
</wb-lang>