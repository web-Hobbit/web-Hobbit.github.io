$(document).ready(function()
{
// Фикcированная шапка при скролле
  $("#menu").removeClass("default");
    $(window).scroll(function()
    {
        if ($(this).scrollTop() > 100) 
        {
            $("#menu").addClass("default").fadeIn('fast');
        } 

        else 
        {
            $("#menu").removeClass("default").fadeIn('fast');
        }

        if ($(this).scrollTop() >= 1500) 
        {
            $("#menu").removeClass("default").fadeIn('fast');
        };
    });
});

$(document).ready(function()
{
// Фикcированная шапка при скролле
  $(".bottom-line").removeClass("default");
    $(window).scroll(function()
    {
        if ($(this).scrollTop() > 100) 
        {
            $(".bottom-line").addClass("default").fadeIn('fast');
        } 

        else 
        {
            $(".bottom-line").removeClass("default").fadeIn('fast');
        }

          if ($(this).scrollTop() >= 1500) 
        {
            $(".bottom-line").removeClass("default").fadeIn('fast');
        };
    });
});

$(document).ready(function()
{
// Фикcированная шапка при скролле
  $(".Soc-networks").removeClass("default");
    $(window).scroll(function()
    {
        if ($(this).scrollTop() > 100) 
        {
            $(".Soc-networks").addClass("default").fadeIn('fast');
        } 

        else 
        {
            $(".Soc-networks").removeClass("default").fadeIn('fast');
        }

          if ($(this).scrollTop() >= 1500) 
        {
            $(".Soc-networks").removeClass("default").fadeIn('fast');
        };


    });
});