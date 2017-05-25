@extends('layouts.layout')

@section('content')


<div class="row">
    <div class="col-md-2 col-sm-0 col-xs-0"></div>
        <div class="col-md-8 col-sm-12 col-xs-12 my" id="target-content" style="text-align: center; padding-top:50px;">
            <table id="myTable" style="text-align:center;" class="table table-hover">
                <tbody>
                <tr><th style="text-align:center;">Страна/Город</th><th style="text-align:center;">Язык</th><th style="text-align:center;">Действия</th></tr>
                @foreach ($countries as $country)
                <tr><td><b>{{$country->title}} (Страна)</b></td><td></td><td><button class="btn btn-success" id="add_town" onclick="window.location.href = '/country/{{$country->id}}';">Изменить/Добавить города</button></td></tr>
                    @foreach($towns[$country->id] as $town)
                        @if ($town != '')
                        <tr><td>{{$town['title']}} (Город)</td><td>{{$town['language']}}</td><td><button class="btn btn-default" onclick="event.preventDefault(); window.location.href='/country/{{$country->id}}/city/{{$town['id']}}/edit'">Изменить</button></td></tr>
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
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