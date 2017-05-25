<table id="myTable" style="text-align:center;" class="table table-hover">
    <caption><h2 style="text-align: center">{{$country->title}}
            <button class="btn btn-danger" id="delete">Удалить</button>
            <button class="btn btn-default" onclick="window.location.href='/'">Назад</button>
        </h2></caption>
    <input type="hidden" value="{{$country->id}}" id="country">
    <tbody>
    <tr><th style="text-align:center;">Город</th><th style="text-align:center;">Язык</th><th style="text-align:center;">Действия</th></tr>
    @foreach($cities as $city)
        @if ($city !='')
            <tr><td>{{$city['title']}}</td><td>{{$city['language']}}</td><td>
                    <form method="post" action="#">
                        <input type="hidden" name="_method" value="delete"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="href" value="/country/{{$country->id}}/city/{{$city['id']}}/delete" />
                        <button class="btn btn-danger delete2">Удалить</button>
                        <button class="btn btn-default" onclick="event.preventDefault(); window.location.href='{{$country->id}}/city/{{$city['id']}}/edit'">Изменить</button></form></td></tr>
        @endif
    @endforeach
    </tbody>
</table>

<br><form method="post" action="#" class="form-inline" style="text-align: center;">
    {{ csrf_field() }}
    <input type="hidden" value="{{$country->id}}" name="id" id="id">
    <caption><h4>Добавить город</h4></caption><br>
    <div class="form-group">
        <input type="text" class="form-control" id="town" placeholder="Название города" name="town">
    </div>
    <div class="form-group">
        <select name="language" id="language" class="form-control">
            @foreach ($languages as $language)
                <option value="{{$language->title}}">{{$language->title}}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-success" id="add_town" onclick="event.preventDefault();">Добавить</button>
</form>

<br><form method="post" action="#" class="form-inline" style="text-align: center;">
    {{ csrf_field() }}
    <caption><h4>Добавить язык</h4></caption><br>
    <div class="form-group">
        <input type="text" class="form-control" id="add_lang" placeholder="Язык" name="add_lang">
    </div>
    <button class="btn btn-success" id="add_language">Добавить</button>
</form>