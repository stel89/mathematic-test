@extends('layouts.layout')

@section('content')

<style>

</style>

<div class="row">
    <div class="col-md-2 col-sm-0 col-xs-0"></div>
        <div class="col-md-8 col-sm-12 col-xs-12 my" id="target-content" style="text-align: center; padding-top:50px;">
            <div class="table1">
                <div class="row1"><div class="cell">Страна/Город</div><div class="cell">Язык</div><div class="cell">Действия</div></div>
                @foreach ($countries as $country)
                    <div class="row1"><div class="cell"><b>{{$country->title}} (Страна)</b></div><div class="cell"></div><div class="cell"><button class="btn btn-success" id="add_town" onclick="window.location.href = '/country/{{$country->id}}';">Изменить</button></div></div>
                    @foreach($towns[$country->id] as $town)
                        @if ($town != '')
                            <div class="row1"><div class="cell">{{$town['title']}} (Город)</div><div class="cell">{{$town['language']}}</div><div class="cell"><button class="btn btn-default" onclick="event.preventDefault(); window.location.href='/country/{{$country->id}}/city/{{$town['id']}}/edit'">Изменить</button></div></div>
                        @endif
                    @endforeach
                @endforeach
                <br>
                <div class="row1">*При изминении страны ей можно добавлять/удалять города а так же их настраивать</div>
            </div>
            <br><form method="post" action="/add_country" class="form-inline" style="text-align: center;">
                {{ csrf_field() }}
                <caption><h4>Добавить страну</h4></caption><br>
                <div class="form-group">
                    <input type="text" class="form-control" id="country" placeholder="Название страны" name="country">
                </div>
                <button class="btn btn-success" id="add_country">Добавить</button>
            </form><br>
            <a href="/lists" class="btn btn-primary">Связанные списки</a>
        </div><div class="col-md-2 col-sm-0 col-xs-0"></div>
</div><br>

<!-- Подключаем скрипты свои -->
<script src="/js/my1.js"></script>

@endsection