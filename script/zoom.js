/* $('.plano').draggable();


$('.parent').bind('mousewheel DOMMouseScroll', function(event){
  event.preventDefault();
    if (event.originalEvent.wheelDelta > 0 ||   event.originalEvent.detail < 0) {
        console.log($('.plano').css('zoom'))// scroll up
      zz = $('.plano').css('zoom')
       $('.plano').css('zoom',parseFloat(zz) + 0.1) 
    }
    else {
      console.log(0)// scroll down
      zz = $('.plano').css('zoom')
      $('.plano').css('zoom',parseFloat(zz) - 0.1) 
    }
});
 */

 
 

const $doc = document,
      $plano = $doc.querySelector(".plano"),
      $padre = $doc.querySelector(".parent"),
      $imagen = $doc.querySelector("img")
      
      //translateX(-3300px) translateY(-2450px)

      let zoom =1
      $padre.addEventListener("wheel", (e) => {

        const x = e.clientX -  $padre.offsetLeft;
        const y = e.clientY -  $padre.offsetTop;
        e.preventDefault();
/*         $plano.style.left="-977px";
        $plano.style.top="-733px"; */
        if (e.deltaY > 0) {
          console.log("acercar");
          zoom -= 0.3;
          $plano.style.zoom = `${zoom}`;
          //$plano.style.transform = `scale(${zoom})`
          console.log(zoom);
        } else {
          console.log("alejar");
          zoom += 0.3;
          $plano.style.zoom = `${zoom}`;
          //$plano.style.transform = `scale(${zoom})`
          console.log(zoom);
        }
      });

const draggable = document.querySelector('.draggable');
let posInicialX = 0;
let posInicialY = 0;
let offsetX = 0;
let offsetY = 0;

$plano.addEventListener('mousedown', onMouseDown);

function onMouseDown(event) {
  event.preventDefault();
  posInicialX = event.clientX;
  posInicialY = event.clientY;

  document.addEventListener('mousemove', onMouseMove);
  document.addEventListener('mouseup', onMouseUp);
}

function onMouseMove(event) {
  event.preventDefault();
  offsetX = (event.clientX - posInicialX);
  offsetY = (event.clientY - posInicialY );

  $plano.style.left = `${$plano.offsetLeft + offsetX}px`;
  $plano.style.top = `${$plano.offsetTop + offsetY}px`;

  posInicialX = event.clientX;
  posInicialY = event.clientY;
}

function onMouseUp() {
  document.removeEventListener('mousemove', onMouseMove);
  document.removeEventListener('mouseup', onMouseUp);
} 


/* const $doc = document,
  $plano = $doc.querySelector(".plano"),
  $padre = $doc.querySelector(".parent"),
  $imagen = $doc.querySelector(".plano img"),
  $mesasDrag = $doc.querySelectorAll(".mesa");

let zoom = 1;
let posInicialX = 0,
  posInicialY = 0,
  posActualX = 0,
  posActualY = 0,
  offsetX = 0,
  offsetY = 0;

$padre.addEventListener("wheel", (e) => {
  e.preventDefault();
  if (e.deltaY > 0) {
    console.log("acercar");
    zoom -= 0.05;
    $plano.style.transform = `scale(${zoom})`;
    console.log(zoom);
  } else {
    console.log("alejar");
    zoom += 0.05;
    $plano.style.transform = `scale(${zoom})`;
    console.log(zoom);
  }
});

$padre.addEventListener("mousedown", (e) => {
  e.preventDefault();
  posInicialX = e.clientX;
  posInicialY = e.clientY;
  $padre.addEventListener("mousemove", onDrag);
});

$padre.addEventListener("mouseup", () => {
  $padre.removeEventListener("mousemove", onDrag);
});

function onDrag(e) {
  e.preventDefault();
  posActualX = e.clientX;
  posActualY = e.clientY;
  offsetX = posActualX - posInicialX;
  offsetY = posActualY - posInicialY;
  $imagen.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
  // aplicar la misma transformación a las mesas
  $mesasDrag.forEach(($mesa) => {
    const rect = $mesa.getBoundingClientRect();
    const mesaX = rect.left + rect.width / 2 - $plano.offsetLeft;
    const mesaY = rect.top + rect.height / 2 - $plano.offsetTop;
    $mesa.style.transform = `translate(${offsetX + mesaX}px, ${offsetY + mesaY}px)`;
  });
} */
