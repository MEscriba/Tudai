"use strict"

//--------------------------JSON precargado
let productos = [
    {
    "item": "Miel",
    "cantidad":"1 kg",
    },
    {
    "item": "Jalea Real",
    "cantidad":"100 mg",
    },
    {
    "item": "Polen granulado",
    "cantidad":"100 g",
    },
    {
    "item": "Propoleo",
    "cantidad":"1 L",
    }
];

mostrarTabla();

// BOTON eliminar
document.querySelector("#eliminar").addEventListener("click", function (event) {
    event.preventDefault();
    productos = [];
    mostrarTabla();
});

// BOTONES + publicar
document.querySelector("#btnSend").addEventListener("click", () => publicar(1));
document.querySelector("#btnSendx3").addEventListener("click", () => publicar(3));

function publicar(j) {
    event.preventDefault();
    agregarLinea(j); //paso la cantidad de lineas iguales que crear
    mostrarTabla();
}

// TOMAR INPUT CREAR LINEAS
let form = document.querySelector("#formProductos");
function agregarLinea(i) {
    let formData = new FormData(form);
    let item = formData.get('Item');
    let cantidad = formData.get('cantidad');

    for (let index = 0; index < i; index++) {
        let productoX = {
            "item": item,
            "cantidad": cantidad,
         };
        productos.push(productoX);
    }
}

//-----------------MOSTRAR TABLA
function mostrarTabla() {
    let tbProductos = document.querySelector('.tabla');
    tbProductos.innerHTML = "";

    let tr = document.createElement("tr");
    tr.appendChild(crearCelda("th", "ITEM"));
    tr.appendChild(crearCelda("th", "CANTIDAD"));
    tbProductos.appendChild(tr);

    for (let i = 0; i < productos.length; i++) {
        let tr = document.createElement("tr");       
        tr.appendChild(crearCelda("td", productos[i].item));
        tr.appendChild(crearCelda("td", productos[i].cantidad));
        tbProductos.appendChild(tr);
    }
}

function crearCelda(tipoCelda, encabezado) {
    let celda = document.createElement(tipoCelda);
    celda.appendChild(document.createTextNode(encabezado));
    return celda;
}


