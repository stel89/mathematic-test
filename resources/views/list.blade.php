@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-md-2 col-sm-0 col-xs-0"></div>
        <div class="col-md-8 col-sm-12 col-xs-12 my" id="target-content" style="text-align: center">
            <br><br>
            <form class="form-inline">
                <div class="form-group">
                    <select id="countries" class="form-control">
                    <option value="-">-Выбирите страну-</option>
                        @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->title}}</option>
                        @endforeach
                    </select></div>
                    <div class="form-group">
                    <select id="towns" class="form-control" disabled>
                    <option value="-">-Выбирите страну-</option>
                    </select>
                    </div>
                <button class="btn btn-success" id="city" disabled>Показать язык</button>
            </form><br>
            <div class="test"></div><br>
            <a href="/" class="btn btn-default">Назад</a>
        </div>
    <div class="col-md-2 col-sm-0 col-xs-0"></div>
</div><br>


<script>



</script>

<!-- Подключаем скрипты свои -->
<script src="/js/my1.js"></script>

@endsection