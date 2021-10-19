let w, container, carousel, item, radius, itemLength, rY, ticker, fps; 
let mouseX = 0;
let mouseY = 0;
let mouseZ = 0;
let addX = 0;


// fps counter created by: https://gist.github.com/sharkbrainguy/1156092,
// no need to create my own :)
let fps_counter = {
  
  tick: function () 
  {
    // this has to clone the array every tick so that
    // separate instances won't share state 
    this.time = this.times.concat(+new Date());
    let seconds, times = this.times;
    
    if (times.length > this.span + 1) 
    {
      times.shift(); // ditch the oldest time
      seconds = (times[times.length - 1] - times[0]) / 1000;
      return Math.round(this.span / seconds);
    } 
    else return null;
  },

  times: [],
  span: 20
};
let counter = Object.create(fps_counter);



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
  
  // set container 3d props
  gsap.set(container, {perspective:600})
  gsap.set(carousel, {z:-(radius)})
  
  // create carousel item props
  
  for ( let i = 0; i < itemLength; i++ )
  {
    let $item = item.eq(i);
    let $block = $item.find('.carouselItemInner');
    
    //thanks @chrisgannon!        
    gsap.set($item, {rotationY:rY * i, z:radius, transformOrigin:"50% 50% " + -radius + "px"});
    
    animateIn( $item, $block )						
  }
  
  // set mouse x and y props and looper ticker
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
  
  gsap.set( $item, { autoAlpha:1, delay:$d } )	
  gsap.set( $block, { z:$nz, rotationY:$nrY, rotationX:$nrX, x:$nx, y:$ny, autoAlpha:0} )
  gsap.to( $block, $s, { delay:$d, rotationY:0, rotationX:0, z:0,  ease:Expo.easeInOut} )
  gsap.to( $block, $s-.5, { delay:$d, x:0, y:0, autoAlpha:1, ease:Expo.easeInOut} )
}

function onMouseMove(event)
{
  mouseX = -(-(window.innerWidth * .5) + event.pageX) * .0025;
  mouseY = -(-(window.innerHeight * .5) + event.pageY ) * .01;
  mouseZ = -(radius) - (Math.abs(-(window.innerHeight * .5) + event.pageY ) - 200);
}

// loops and sets the carousel 3d properties
function looper()
{
  addX += mouseX
  gsap.to( carousel, 1, { rotationY:addX, rotationX:mouseY, ease:Quint.easeOut } )
  gsap.set( carousel, {z:mouseZ } )
  fps.text( 'Framerate: ' + counter.tick() + '/60 FPS' )	
}

function getRandomInt( $n )
{
  return Math.floor((Math.random()*$n)+1);	
}