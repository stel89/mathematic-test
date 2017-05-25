var url1 = window.location.href;

                if (window.location.href.indexOf('#')>= 0)
                {
                   url1=window.location.href.substring(0, window.location.href.length - 2);
                }


                //alert(url1);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $(window).on('hashchange', function() {
                    if (window.location.hash) {
                        var page = window.location.hash.replace('#', '');
                        if (page == Number.NaN || page <= 0) {
                            return false;
                        } else {
                            if (window.location.href.indexOf('#')>= 0)
                            {
                                page=window.location.href.substring(window.location.href.length - 1);
                                alert(page);
                            }
                            getPosts(page);
                        }
                    }
                });
                $(document).ready(function() {
                    $(document).on('click', '.pagination a', function (e) {
                        getPosts($(this).attr('href').split('page=')[1]);
                        e.preventDefault();
                    });
                });
                function getPosts(page) {
                    $.ajax({
                        url : url1 +'&page=' + page,
                        type: "get",
                        dataType: 'html',
                    }).done(function (data) {
                        $('.posts').html(data);
                        location.hash = page;
                    }).fail(function(jqXHR, ajaxOptions, thrownError)
                    {
                        alert('No response from server');
                    });
                }