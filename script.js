$(".to-fade-txt").click(function(){
    $(".txt-hide").fadeToggle();
})

$(".to-slide-txt").click(function(){
    $(".txt-hide").toggleClass("txt-bg");
    $(".txt-hide").slideToggle();

})

$(".to-move-center").click(function(){
    $("img").addClass("img-move");
    $(".img-move").animate({left: "650px"}, 3000);
})

$(".to-move-origin").click(function(){
    $(".img-size").animate({left: "0"}, "slow");
})

$(".to-get-context").dblclick(function(){
    alert("Context = " + $(".get-context").text());
})

$(".get-context").on({
    mouseenter: function(){
    $(this).css("background-color", "lightgray");
  },
  mouseleave: function(){
    $(this).css("background-color", "lightblue");
  }
})


$("#myInput").on("keyup",function(){
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    })
})

$("#append").click(function(){
    $(".append-form").submit(function(){
        var value = $("#append-name").val();
        $(".get-context").append(value);
        $("#append-name").val('');
    });
});

$("#prepend").click(function(){
    $(".prepend-form").submit(function(){
        var pvalue = $("#prepend-name").val();
        $(".get-context").prepend(pvalue);
        $("#prepend-name").val('');
    })
})
