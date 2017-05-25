
            <form style="width:50%; margin-left: auto; margin-right: auto; text-align: center; margin-top:10%;" method="post" action="/country/{{$id1}}/city/{{$city->id}}/update">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put"/>
                <input type="hidden" name="id1" id="id1" value="{{$id1}}"/>
                <div class="form-group"">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Название" value="{{$city->title}}">
                </div>
                <div class="form-group"">
                        @php $i=1;@endphp
                        @foreach($languages as $language)
                         <label for="language{{$i-1}}">Язык{{$i}}</label>
                        <select class="form-control" name="language{{$i-1}}" id="language{{$i-1}}" style="display: inline-block">
                            @foreach($languages2 as $language2)
                                @if($language2->title == $language)
                                    <option selected="selected" value="{{$language2->title}}">{{$language2->title}} (Выбран сейчас)</option>
                                @else
                                    <option value="{{$language2->title}}">{{$language2->title}}</option>
                                @endif
                            @endforeach
                                <option value="delete">Удалить</option>
                        </select>
                         @php
                             $i++;
                        @endphp
                        @endforeach
                </div>
            <input type="hidden" value="{{$id1}}" name="country">
            <input type="hidden" value="{{$i}}" name="count">
            <button class="btn btn-success">Сохранить</button>
<button class="btn btn-default" onclick="event.preventDefault(); window.location.href='/country/{{$id1}}'">Назад</button>
            </form>

            <form class="form-inline" style="width:50%; margin-left: auto; margin-right: auto; text-align: center; margin-top:10%;" method="post" action="/city/{{$city->id}}/add_lang">
                <input type="hidden" value="{{$city->id}}" id="id">
                {{ csrf_field() }}
                <div class="form-group"">
                <label for="lang">Добавить язык</label>
                <select class="form-control" name="lang" id="lang">
                    @foreach($languages2 as $language2)
                        <option value="{{$language2->title}}">{{$language2->title}}</option>
                     @endforeach
                </select>
                <button class="btn btn-success" id="add_lang2">Добавить</button>
                </div>
            </form>
