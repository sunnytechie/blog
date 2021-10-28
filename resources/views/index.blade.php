@extends('layouts.app')

@section('content')

<nav class="scroll-navbar">
    <ul id="mainNav" class="scroll-nav">
      <li class="active"><a href="#home">Home</a></li>
      <li><a href="#work">Work</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>    
    </ul>
</nav>
  
<div class="container-fluid">
    <section class="mt-3" id="home"><h2>Home</h2></section>
    <section id="work" data-sr><h2>Work</h2></section>
    <section id="about"><h2>About</h2></section>
    <section id="contact"><h2>Contact</h2></section>
</div>












{{-- Script for Nav selection --}}
<script>
    // Cache selectors
var lastId,
 topMenu = $("#mainNav"),
 topMenuHeight = topMenu.outerHeight()+1,
 // All list items
 menuItems = topMenu.find("a"),
 // Anchors corresponding to menu items
 scrollItems = menuItems.map(function(){
   var item = $($(this).attr("href"));
    if (item.length) { return item; }
 });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 850);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});
</script>
@endsection
