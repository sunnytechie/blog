<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

     <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/sfi-favicon.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- My custom CSS --}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    {{-- ckeditor editor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

</head>

<body>
    <div id="app">
        
        @include('snippets.navbar')

        <main class="mt-4">
            @yield('content')
        </main>

        @include('snippets.footer')
    </div>
</body>

{{-- Script --}}
<script>
    $(document).ready(function(){
    var submitIcon = $('.searchbar-icon');
    var inputBox = $('.searchbar-input');
    var searchbar = $('.searchbar');
    var isOpen = false;
    submitIcon.click(function(){
    if(isOpen == false){
    searchbar.addClass('searchbar-open');
    inputBox.focus();
    isOpen = true;
    } else {
    searchbar.removeClass('searchbar-open');
    inputBox.focusout();
    isOpen = false;
    }
    });
    submitIcon.mouseup(function(){
    return false;
    });
    searchbar.mouseup(function(){
    return false;
    });
    $(document).mouseup(function(){
    if(isOpen == true){
    $('.searchbar-icon').css('display','block');
    submitIcon.click();
    }
    });
    });
    function buttonUp(){
    var inputVal = $('.searchbar-input').val();
    inputVal = $.trim(inputVal).length;
    if( inputVal !== 0){
    $('.searchbar-icon').css('display','none');
    } else {
    $('.searchbar-input').val('');
    $('.searchbar-icon').css('display','block');
    }
    }
   </script>

   {{-- Script Mobile Search --}}
   <script>
       $(document).ready(function(){
    var submitIconMobile = $('.searchbar-icon-2');
    var inputBoxMobile = $('.searchbar-input-2');
    var searchbarMobile = $('.searchbar-2');
    var isOpen = false;
    submitIconMobile.click(function(){
    if(isOpen == false){
    searchbarMobile.addClass('searchbar-open-2');
    inputBoxMobile.focus();
    isOpen = true;
    } else {
    searchbarMobile.removeClass('searchbar-open-2');
    inputBoxMobile.focusout();
    isOpen = false;
    }
    });
    submitIconMobile.mouseup(function(){
    return false;
    });
    searchbarMobile.mouseup(function(){
    return false;
    });
    $(document).mouseup(function(){
    if(isOpen == true){
    $('.searchbar-icon-2').css('display','block');
    submitIconMobile.click();
    }
    });
    });
    function buttonUp2(){
    var inputVal = $('.searchbar-input-2').val();
    inputVal = $.trim(inputVal).length;
    if( inputVal !== 0){
    $('.searchbar-icon-2').css('display','none');
    } else {
    $('.searchbar-input-2').val('');
    $('.searchbar-icon-2').css('display','block');
    }
    }
   </script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor3' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor4' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor5' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

</html>
