<div class="container">
        <h3>{{_lang.vacancy}}</h3>
    <div class="row">
        <wb-foreach wb="table=news&sort=date:d&render=server&offset=-100" wb-filter="{'active':'on'}">
            <div class="col-sm-6 mb-3r">
                <h4 class="tx-28">Fullstack разработчик</h4>
                <p class="tx-20">Мы будем обращать особое внимание на ваш опыт управления командами разработчиков и рады будем поддержать
                    ваши амбиции вырасти в тимлида и дальше технического директора.</p>
            </div>
        </wb-foreach>
    </div>
</div>
<wb-lang>
[en]
vacancy = Vacancy
[ru]
vacancy = Вакансии
</wb-lang>