//event
//evenement a la souris
//1er exemple click

$(document).ready(function () {
    $('#pikapika').click(function (){
        $(this).text("pikachu !!")
    })
})

//le selecteur $ permet de compresser la selection en JS, cette derniere se comporte comme un querySelector avec une selection universelle de plusieurs fonctions predefinies en JQuery


//second exemple dbclick

$(document).ready(function () {
    $('#salameche').dblclick(function () {
        $(this).css({
            "border": "black dotted 3px",
            "color": "aquamarine",
            "background-color": "pink",
            "padding": "5px",
        })
    })
})

//troisieme exemple mouseenter et mouseleave

$(document).ready(function(){
    $(".rattata").mouseenter(function (){
        $(this).text('BK')
    })
    $(".rattata").mouseleave(function (){
        $(this).text('KFC')
    })
})

//quatrieme exemple mousemove

$(document).ready(function (){
    $("body").mousemove(function (movePos){
        let coords = "(" + movePos.pageX + "," + movePos.pageY + ")";
        $("#coord").text(coords)
    })
})

//evenements au clavier

//evenement d'appui de touche
//keyup et keydown

$(document).ready(function(){
    $("#ramoloss").keydown(function(chocMental){
        $(this).css("background-color", "lightBlue");
        $("span").text(chocMental.which);
    });
    $("#ramoloss").keyup(function(){
        $(this).css("border-radius", "25%");
    })
})

//le keypress

$(document).ready(function(){
    $("#tiplouf").keypress(function(event){
        $("#span1").text(event.which);
    })

    $("#tiplouf").keydown(function(event){
        $("#span2").text(event.which);
    })
})