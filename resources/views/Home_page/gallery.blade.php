@extends('Home_page.master-layout')

@section('content')



    <section class="page-title d-none d-md-block" style="background-color: block">
        <div class="auto-container">
            <h2>Client</h2>
            <ul class="page-breadcrumb">
                <li><a href="#">home</a></li>
                <li>Client</li>
            </ul>
        </div>
    </section>    


<div class="container">
    <div class="row">
        <div class="gallery">
            @foreach ($gallery as $row)
              <figure>
                <img src="{{ url($row->image) }}" alt="" />
                <figcaption>{{ $row->name }} </figcaption>
              </figure>
            @endforeach
        </div>
        <script>
                popup = {
              init: function(){
                $('figure').click(function(){
                  popup.open($(this));
                });
                
                $(document).on('click', '.popup img', function(){
                  return false;
                }).on('click', '.popup', function(){
                  popup.close();
                })
              },
              open: function($figure) {
                $('.gallery').addClass('pop');
                $popup = $('<div class="popup" />').appendTo($('body'));
                $fig = $figure.clone().appendTo($('.popup'));
                $bg = $('<div class="bg" />').appendTo($('.popup'));
                $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
                $shadow = $('<div class="shadow" />').appendTo($fig);
                src = $('img', $fig).attr('src');
                $shadow.css({backgroundImage: 'url(' + src + ')'});
                $bg.css({backgroundImage: 'url(' + src + ')'});
                setTimeout(function(){
                  $('.popup').addClass('pop');
                }, 10);
              },
              close: function(){
                $('.gallery, .popup').removeClass('pop');
                setTimeout(function(){
                  $('.popup').remove()
                }, 100);
              }
            }

            popup.init()
        </script>

    </div>
</div>

    <section class="call-to-action-section" style="background-image:url({{ URL::to(@$slider[0]->slider_image)}});">
        <div class="auto-container">
            <h2>Get A <span class="theme_color">Solutions</span> For All <br> Printing</h2>
            <div class="text">We believe strongly that we can and must do things differently. <br> Our aim is to bring you news, perspectives.</div>
            <a href="{{ route('main.contact') }}" class="theme-btn btn-style-four">Contact Us</a>
        </div>
    </section>


@endsection
