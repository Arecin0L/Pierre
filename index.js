let w, container, carousel, item, radius, itemLength, rY, ticker, fps; 
let mouseX = 0;
let mouseY = 0;
let mouseZ = 0;
let addX = 0;


$(document).ready( init )

function init()
{
    w = $(window);
    container = $( '#contentContainer' );
    carousel = $( '#carouselContainer' );
    item = $( '.carouselItem' );
    itemLength = $( '.carouselItem' ).length;
    fps = $('#fps');
    rY = 360 / itemLength;
    radius = Math.round( (250) / Math.tan( Math.PI / itemLength ) );
    
   
    TweenMax.set(container, {perspective:600})
    TweenMax.set(carousel, {z:-(radius)})
    
    
    for ( let i = 0; i < itemLength; i++ )
    {
        let $item = item.eq(i);
        let $block = $item.find('.carouselItemInner');
               
TweenMax.set($item, {rotationY:rY * i, z:radius, transformOrigin:"50% 50% " + -radius + "px"});
        
        animateIn( $item, $block )						
    }
    
    window.addEventListener( "mousemove", onMouseMove, false );
    ticker = setInterval( looper, 1000/60 );			
}

function animateIn( $item, $block )
{
    let $nrX = 360 * getRandomInt(2);
    let $nrY = 360 * getRandomInt(2);
        
    let $nx = -(2000) + getRandomInt( 4000 )
    let $ny = -(2000) + getRandomInt( 4000 )
    let $nz = -4000 +  getRandomInt( 4000 )
        
    let $s = 1.5 + (getRandomInt( 10 ) * .1)
    let $d = 1 - (getRandomInt( 8 ) * .1)
    
    TweenMax.set( $item, { autoAlpha:1, delay:$d } )	
    TweenMax.set( $block, { z:$nz, rotationY:$nrY, rotationX:$nrX, x:$nx, y:$ny, autoAlpha:0} )
    TweenMax.to( $block, $s, { delay:$d, rotationY:0, rotationX:0, z:0,  ease:Expo.easeInOut} )
    TweenMax.to( $block, $s-.5, { delay:$d, x:0, y:0, autoAlpha:1, ease:Expo.easeInOut} )
}

function onMouseMove(event)
{
    mouseX = -(-(window.innerWidth * .5) + event.pageX) * .00125;
    mouseY = -(-(window.innerHeight * .5) + event.pageY ) * .01;
    mouseZ = -(radius) - (Math.abs(-(window.innerHeight * .5) + event.pageY ) - 200);
}

function looper()
{
    addX += mouseX
    TweenMax.to( carousel, 1, { rotationY:addX, rotationX:mouseY, ease:Quint.easeOut } )
    TweenMax.set( carousel, {z:mouseZ } )
    fps.text( 'Framerate: ' + counter.tick() + '/60 FPS' )	
}

function getRandomInt( $n )
{
    return Math.floor((Math.random()*$n)+1);	
}

$(document).ready(function(){

    $(".lg").mouseenter(function openLang(){
    $('#lang').css({
        width: "20vw",
        transform: "translateY(20vw)",
        backgroundColor: "transparent",
        right: "14vw",
    })
})
$(".lg").click(function closeLang(){
    $('#lang').css({
        width: "0",
        transform: "translateX(100vh)",
        backgroundColor: "transparent",
    })
})


});

