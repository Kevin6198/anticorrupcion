//Todo el codigo presente sirve para las acciones que realiza el slider de la pagina de inicio

//Se traen objetos de html para utilizarze.
const slider = document.querySelector('.slider');
const boton = document.querySelectorAll('.btn-s');
const opcion = document.querySelectorAll('.option');
const imagenSlider = document.querySelectorAll('.img-slider');

var index = 1;//Sera la variable que ira mostrando la posicion de la imagen
var opIndex = 0;//Sera el contador que ayudara a controlar la posision maxima de las imagenes
var intervalo = 10000;//Tiempo que tardara en ejecutarse la funcion setInterval
var size = imagenSlider[index].clientWidth;//Tamaño completo de las imagenes (juntas) las dividira en posiciones individuales

accionSilder();

function accionSilder (){
	slider.style.transform = "translateX("+ (-size * index) +"px)";//Movemos la posicion de la imagen traslandola el numero de pixeles que se indique
	opcion.forEach(op => op.classList.remove('colored'));//Removemos el estilo del indice seleccionado
	opcion[opIndex].classList.add('colored');//Agregamos el estilo al nuevo indice
}

function accionSilde () {
	slider.style.transition = "transform .5s ease-in-out";//Le damos una transicion que durara .5s para que no ocurra de golpe.
	accionSilder();
}

function accionBoton () {
	if (this.id === "previo") {
		index--;
		if (opIndex == 0) {//Si el slider esta en la primera posicion se cambia el opIndex a la ultima para simular el bucle infinito
			opIndex = 4;
		} else {
			opIndex--;//Si no solo disminuye una posicion
		}
	} else if (this.id === "siguiente") {
		index++;
		if (opIndex == 4) {//Si el slider esta en la ultima posicion se cambia el opIndex a la primera para simular el bucle infinito
			opIndex = 0;
		} else {
			opIndex++;//Si no solo aumenta una posicion
		}
	}
	accionSilde();
}

function accionOpcion () {//En caso de usar los indices para moverse entre las imagenes
	let i = Number(this.getAttribute('option-index'));//traemos el valor que se asigno en el codigo para modificar index y opIndex para realizar la funcion
	index = i + 1;
	opIndex = i;
	accionSilde();
}

//Simulacion del bucle en el slider
//Cada que termine la transicion de una posicion se revisa si el id es ultimo o primero
slider.addEventListener('transitionend', () =>{
	if (imagenSlider[index].id === "ultimo") {//Si es el ultimo 
		slider.style.transition = "none";//Hace el cambio de imagen sin transicion para que no se note el bucle
		index = imagenSlider.length - 2;//Le da la ultima posicion para poder mostrar la ultima imagen
		slider.style.transform = "translateX("+ (-size * index) +"px)";//Realiza la transicion para simular el bucle
	}else if (imagenSlider[index].id === "primero") {//Si es el primero
		slider.style.transition = "none";//Hace el cambio de imagen sin transicion para que no se note el bucle
		index = 1;//Le da la primera posicion para poder mostrar la primer imagen
		slider.style.transform = "translateX("+ (-size * index) +"px)";//Realiza la transicion para simular el bucle
	}
})

boton.forEach(btn => btn.addEventListener('click', accionBoton));//Cada que se de click en algun boton sea realizara el llamado a la funcion accionBoton
opcion.forEach(option => option.addEventListener('click', accionOpcion));//Cada que se de click en algun indice sea realizara el llamado a la funcion accionOpcion

//Esta funcion realiza el cambio de imagen en el slider cada cierto tiempo
setInterval(function () {//Cada intervalo de tiempo ejecutara esta funcion
	index++;//Como solo va hacia delante solo se incrementa
	if (opIndex == 4) {
		opIndex = 0;//Para realizar el bucle cada vez que llege al final se reinicia el opIndex
	} else {
		opIndex++;
	}
	accionSilde();//LLama a la funcion que ya estaba definida y se ejecuta normal
}, intervalo);//Sera el tiempo de espera para volver a ejecutar la funcion