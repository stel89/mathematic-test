 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                   
            $('#delete').click(function () {
            id = $('#country').val();
            confirm_var = confirm('Удалить страну?');
            if (!confirm_var) return false;
            $.ajax({
                url: '/country/' + id + '/delete',
                type: 'delete',
                success: function (msg) {
                    window.location.href = "/"
                },
                error: function (msg) {
                    console.log(msg); // в консоле  отображаем информацию об ошибки, если они есть
                }
            });
        });

        $('.delete2').click(function () {
            event.preventDefault();
            var href = $(this).parent().children("input[name='href']").val();

            $.ajax({
                url: href,
                method: 'delete',
                success: function (data) {
                    $('#target-content').html(data);
                    $.getScript("/js/my1.js");
                },
                error: function (data) {
                    console.log(data); // в консоле  отображаем информацию об ошибки, если они есть
                }
            });

        });

        $('#add_town').click(function () {
            event.preventDefault();
            var id = $('#id').val();
            var town = $('#town').val();
            var language = $('#language').val();

            $.ajax({
                url: '/add_town',
                method: 'post',
                data:{id: id, town: town, language: language},
                success: function (data) {
                    $('#target-content').html(data);
                    $.getScript("/js/my1.js");
                },
                error: function (data) {
                    console.log(data); // в консоле  отображаем информацию об ошибки, если они есть
                }
            });

        });
        
    $('#add_country').click(function()
    {
        var country = $('#country').val();
        event.preventDefault();
        $.ajax({
            url : '/add_country',
            method: "post",
            dataType: 'html',
            data: {country: country},
            success: function (data) {
            $('#target-content').html(data);
            $.getScript("/js/my1.js");
        }, 
        error: function(msg)
            {
                console.log(msg); // в консоле  отображаем информацию об ошибки, если они есть
            }
        });
    });
    
    $('#add_language').click(function()
    {
        var lang = $('#add_lang').val();
        var id = $('#id').val();
        event.preventDefault();
        $.ajax({
            url : '/add_language',
            method: "post",
            dataType: 'html',
            data: {add_lang: lang, id: id},
            success: function (data) {
                $('#target-content').html(data);
                $.getScript("/js/my1.js");
            },
            error: function(msg)
            {
                console.log(msg); // в консоле  отображаем информацию об ошибки, если они есть
            }
        });
        alert('Язык добавлен в список языков');
    });
    
     $('#add_lang2').click(function()
    {
        var lang = $('#lang').val();
        var id = $('#id').val();
        var id1 = $('#id1').val();
        event.preventDefault();
        $.ajax({
            url : '/city/'+id+'/add_lang',
            method: "post",
            dataType: 'html',
            data: {lang: lang, id: id, id1: id1},
            success: function (data) {
                $('#target-content').html(data);
                $.getScript("/js/my1.js");
            },
            error: function(msg)
            {
                console.log(msg); // в консоле  отображаем информацию об ошибки, если они есть
            }
        });
    });
     
     //при изминении первого списка загружаем аджаксом содержимое второго селекта и блокируем/разблокируем кнопку
     
         $( "#countries" ).change(function() {

            var id = $('#countries').val();
            if (id !='-')
            {
            $.ajax({
                url : '/lists/'+id,
                method: "get",
                dataType: 'JSON',
                success: function (data) {
                    $("#towns").removeAttr('disabled');
                    $( "#towns" ).html('');
                    for (var i=0; i<data.data.length; i++) {
                        if(data.data[i] != null) {
                            $( "#towns" ).html($( "#towns" ).html()+'<option value="'+data.data[i].id+'">'+data.data[i].title+'</option>');
                        }
                    }
                    if($( "#towns" ).html() =='')
                    {
                        $( "#towns" ).html('<option value="-">-Стран нет-</option>');
                        $("#city").attr('disabled', 'disabled');
                    }
                    else
                    {
                        $("#city").removeAttr('disabled');
                    }
                },
                error: function(data)
                {
                    console.log(data); // в консоле  отображаем информацию об ошибки, если они есть
                }
            });
            }
            else
            {
                $("#towns").attr('disabled', 'disabled');
                $( "#towns" ).html('<option value="-">-Выбирите страну-</option>');
            }
    });
         
         $('#city').click(function()
    {
        event.preventDefault();
        var id = $('#towns').val();

        $.ajax({
            url : '/lists/town/'+id,
            method: "get",
            dataType: 'JSON',
            success: function (data) {
                $('.test').html('');
                for (var i=0; i<data.data.length; i++) {
                 $('.test').html($('.test').html()+'<p><b>Язык</b>: '+ data.data[i])
                }
                if ($('.test').html() == '')
                {
                    $('.test').html('Языков нет, удалили все чтоли ? :(')
                }
            },
            error: function(msg)
            {
                console.log(msg); // в консоле  отображаем информацию об ошибки, если они есть
            }
        });

    });

    