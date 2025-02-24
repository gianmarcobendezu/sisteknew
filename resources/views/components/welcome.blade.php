<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    
    <h2 class="text-3xl font-bold text-[#77006b] border-b-4 border-[#77006b] pb-2 mb-4">
        Customización de Picnic
    </h2>    
    
    <div class="mx-auto p-6 bg-white rounded-2xl shadow-lg">
        <div class="grid grid-cols-2 gap-6">
            <!-- Formulario -->
            <div class="space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    <input 
                        placeholder="Nombres" 
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    >
                    <input 
                        placeholder="Apellidos" 
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    >
                </div>
    
                <div class="grid grid-cols-2 gap-4">
                    <input 
                        placeholder="Teléfono" type="number"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    >
                    <input 
                        placeholder="Email" type="email"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    >
                </div>
    
                <div class="grid grid-cols-4 gap-4 items-center">
                    <select  onchange="cambiarexperiencia()"
                        id="txtselect" 
                        class="col-span-2 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    >
                        <option value="">Seleccione un programa</option>
                        <option value="1" selected>PICNIC En el desierto de Huacachina</option>
                        <option value="2">Tiempo de Brindis Express</option>
                        <option value="3">Tiempo de Brindis</option>
                        <option value="4">MiniRiders: Conquista el desierto UTV RC</option>
                        <option value="5">Sunset & BBQ en el desierto</option>
                        <option value="6">Momento Cheese & Wine en las Dunas</option>
                        <option value="7">Banquete estelar en el desierto</option>
                    </select>
    
                    <input 
                        type="text" 
                        id="txtpax" 
                        placeholder="Pax"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    >
    
                    <input 
                        type="text" 
                        id="txttotal" 
                        placeholder="Total"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    >
                </div>
                
                <!---
                <table style="zoom: 85%"  class="verflow-y-auto max-h-64 w-full text-left border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">

                            <th class="p-2 border border-gray-200">Descripción</th>
                            <th class="p-2 border border-gray-200">Cantidad</th>
                            <th class="p-2 border border-gray-200">Observación</th>

                        </tr>
                    </thead>
                    <tbody id="tablacuerpopicnic">
                    </tbody>
                </table>
            -->

                <table class="min-w-full border border-gray-300" style="zoom:75%">

                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 text-left">INCLUYE</th>
                            <th class="py-2 px-4 text-left">Customización</th>
                        </tr>
                    </thead>
                    <tbody id="tabla-dinamicax">
                    </tbody>

                </table>
            
                <h2>¿Desea un upgrade para su Picnic?</h2>

                <table class="min-w-full border border-gray-300" style="zoom:85%">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 text-left">Categorías</th>
                            <th class="py-2 px-4 text-left">Customización</th>
                        </tr>
                    </thead>
                    <tbody id="tabla-dinamica">
                        <!-- Aquí se llenarán los datos dinámicamente -->
                    </tbody>
                </table>

                
    
                <button 
                    class="w-full py-3 bg-[#77006b]  text-white rounded-lg font-semibold shadow-lg hover:bg-gray-600 transition"
                >
                    ENVIAR
                </button>
            </div>
    
            <!-- Imagen -->
            <div class="flex items-center justify-center">
                <img 
                    alt="Imagen Generador IA" 
                    class="w-64 h-64 object-cover rounded-lg border border-gray-200"
                >
            </div>
        </div>
    </div>
    



    <!---
    <x-application-logo class="block h-12 w-auto" />
    -->
    <!---
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bienvenido a la aplicación Jetstream
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
        to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
        you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
        ecosystem to be a breath of fresh air. We hope you love it.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Documentation</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.
        </p>

        <p class="mt-4 text-sm">
            <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700">
                Explore the documentation

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="https://laracasts.com">Laracasts</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
        </p>

        <p class="mt-4 text-sm">
            <a href="https://laracasts.com" class="inline-flex items-center font-semibold text-indigo-700">
                Start watching Laracasts

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="https://tailwindcss.com/">Tailwind</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn't get in your way. You'll be amazed how easily you can build and maintain fresh, modern designs with this wonderful framework at your fingertips.
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                Authentication
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Authentication and registration views are included with Laravel Jetstream, as well as support for user email verification and resetting forgotten passwords. So, you're free to get started with what matters most: building your application.
        </p>
    </div> -->

</div>
<script>

    function cambiarexperiencia()
    {

        /*
        var descripcion = "Mesa";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);
        */

        /*
        var descripcion = "Columpio Panorámico";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);
        */
        
        /*
        var descripcion = "Alfombra Decorativa";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);
        */

        /*
        var descripcion = "Faroles";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);

        var descripcion = "Candelabros";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);
        */
        var descripcion = "ALIMENTACIÓN Y BEBIDAS";
        var cantidad = 1;
        agregarFilaCategoria(descripcion, cantidad);

        var descripcion = "Decoración de Flores";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);

        var descripcion = "Espumante Importado";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);

        var descripcion = "Piqueo Básico:Aceitunas";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);

        var descripcion = "Piqueo Básico:Jamón";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);


        var descripcion = "Piqueo Básico:Crackers con Dip";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);

        var descripcion = "Piqueo Básico:Tabla de Frutas";
        var cantidad = 1;
        agregarFila(descripcion, cantidad);

        var descripcion = "LUCES";
        var cantidad = 1;
        agregarFilaCategoria(descripcion, cantidad);

        var descripcion = "ENTRETENIMIENTO";
        var cantidad = 1;
        agregarFilaCategoria(descripcion, cantidad);

    }


    //$("#tablacuerpopicnic").append("<tr><td>Mesa</td><td>2</td></tr>")
    
    function agregarFilaCategoria(descripcion,cantidad)
    {

        var cuerpoTabla = document.getElementById("tablacuerpopicnic");

    // Crear elementos de fila y celdas
    var fila = document.createElement("tr");
    var celdaDescripcion = document.createElement("td");
    var celdaCantidad = document.createElement("td");
    var celdaMarca = document.createElement("td");

    // Asignar valores a las celdas
    celdaDescripcion.textContent = descripcion;
    

    // Agregar celdas a la fila
    fila.appendChild(celdaDescripcion);
   


    // Agregar fila al cuerpo de la tabla
    cuerpoTabla.appendChild(fila);


    }

    function agregarFila(descripcion, cantidad) {
    // Obtener el cuerpo de la tabla
    var cuerpoTabla = document.getElementById("tablacuerpopicnic");

    // Crear elementos de fila y celdas
    var fila = document.createElement("tr");
    var celdaDescripcion = document.createElement("td");
    var celdaCantidad = document.createElement("td");
    var celdaMarca = document.createElement("td");

    // Asignar valores a las celdas
    celdaDescripcion.textContent = descripcion;
    //celdaCantidad.textContent = cantidad;
    var inputCantidad = document.createElement("input");
    inputCantidad.type = "number";
    inputCantidad.value = cantidad;
    inputCantidad.classList.add("w-full", "px-4", "py-2", "border", "rounded-lg", "focus:ring-2", "focus:ring-blue-500", "focus:outline-none");
    inputCantidad.min = "0"; // valor mínimo
    inputCantidad.style.width = "60px";  // Ajusta el ancho a un valor personalizado en píxeles

    celdaCantidad.appendChild(inputCantidad);
    


    var opcionx = document.createElement("option");
    opcionx.value = "0";
    opcionx.textContent = "";

    var opcion1 = document.createElement("option");
    opcion1.value = "1";
    opcion1.textContent = "Boho Chic";

    var opcion2 = document.createElement("option");
    opcion2.value = "2";
    opcion2.textContent = "Campestre";

    var opcion3 = document.createElement("option");
    opcion3.value = "3";
    opcion3.textContent = "Romantico";

    var opcion4 = document.createElement("option");
    opcion4.value = "4";
    opcion4.textContent = "Vintage";

    /*
    var opcion5 = document.createElement("option");
    opcion5.value = "5";
    opcion5.textContent = "Hawaiiano";

    var opcion6 = document.createElement("option");
    opcion6.value = "6";
    opcion6.textContent = "Frutal";

    var opcion7 = document.createElement("option");
    opcion7.value = "7";
    opcion7.textContent = "Tematico de Peliculas";

    */

    var opcion8 = document.createElement("option");
    opcion8.value = "8";
    opcion8.textContent = "Minimalista";



     // Celda de Colores (select con colores)
    var celdaColores = document.createElement("td");
    var selectColores = document.createElement("select");

    selectColores.classList.add("w-full", "px-4", "py-2", "border", "rounded-lg", "focus:ring-2", "focus:ring-blue-500", "focus:outline-none");


    // Colores primarios
    var inputMarca = document.createElement("input");
    inputMarca.type = "text";
    inputMarca.value = "";
    inputMarca.classList.add("w-full", "px-4", "py-2", "border", "rounded-lg", "focus:ring-2", "focus:ring-blue-500", "focus:outline-none");
    inputMarca.min = "0"; // valor mínimo
    inputMarca.style.width = "100px";  // Ajusta el ancho a un valor personalizado en píxeles

    celdaMarca.appendChild(inputMarca);
    
    
    var celdaObservaciones = document.createElement("td");
    var textarea = document.createElement("textarea");
    textarea.rows = "1";
    textarea.cols = "10";
    textarea.classList.add("w-full", "px-4", "py-2", "border", "rounded-lg", "focus:ring-2", "focus:ring-blue-500", "focus:outline-none");
    celdaObservaciones.appendChild(textarea);

    // Agregar celdas a la fila
    fila.appendChild(celdaDescripcion);
    fila.appendChild(celdaCantidad);

    fila.appendChild(celdaMarca);
    fila.appendChild(celdaObservaciones);


    // Agregar fila al cuerpo de la tabla
    cuerpoTabla.appendChild(fila);
}

//


var tablaDinamica = document.getElementById('tabla-dinamica');

var tablaDinamicax = document.getElementById('tabla-dinamicax');

const datos = [
    {
        id: 1,
        nombre: 'ALIMENTACIÓN Y BEBIDAS',
        hijos: [
            {
                id: 11,
                nombre: 'BOCADITOS',
                items: [

                    { id: 111, nombre: 'MINI EMPANADAS' },
                    { id: 112, nombre: 'MINI SANDWICH TRIPLE DE POLLO' },
                    { id: 113, nombre: 'MINI BUTIFARRA DE JAMON CON QUESO' },
                    { id: 114, nombre: 'MINI BUTIFARRA DE JAMON DEL PAIS' },
                    { id: 115, nombre: 'MINI ALFAJOR' },
                    { id: 116, nombre: 'MINI PROFITEROLES' }

                ],
            },
            {
                id: 12,
                nombre: 'EMBUTIDOS - CHARCUTERIA',
                items: [
                    { id: 121, nombre: 'JAMÓN SERRANO' },
                    { id: 122, nombre: 'JAMÓN CROCANTE' },
                    { id: 123, nombre: 'SALAME' }
                ],
            },
            
            {
                id: 13,
                nombre: 'QUESOS',
                items: [
                    { id: 131, nombre: 'QUESO DE CABRA' },
                    { id: 132, nombre: 'QUESO ANDINO' },
                    { id: 133, nombre: 'QUESO PARIA' },
                    { id: 134, nombre: 'QUESO EDAM' },
                    { id: 135, nombre: 'QUESO PARMESANO' },
                    { id: 136, nombre: 'QUESO GOUDA' }
                    //{ id: 132, nombre: 'QUESO MANCHEGO' },
                    //
                    //{ id: 134, nombre: 'QUESO MOZARELLA' }
                ],
            },
            

            {
                id: 14,
                nombre: 'CAFE',
                items: [
                    { id: 141, nombre: 'CAFE' },
                ],
            },
            {
                id: 15,
                nombre: 'TE',
                items: [
                    { id: 151, nombre: 'TE' },
                ],
            },
            
            {
                id: 16,
                nombre: 'INFUSIONES',
                items: [
                    { id: 161, nombre: 'INFUSIONES' },
                ],
            },

            {
                id: 17,
                nombre: 'GASEOSAS Y AGUA',
                items: [
                    { id: 171, nombre: 'COCA COLA' },
                    { id: 172, nombre: 'INCA KOLA' },
                    { id: 173, nombre: 'AGUA SOCOSANI CON GAS' }

                ],
            },

            {
                id: 18,
                nombre: 'VINOS Y ESPUMANTES',
                items: [
                    { id: 181, nombre: 'BLANCO' },
                    { id: 182, nombre: 'TINTO' },
                    { id: 183, nombre: 'ESPUMANTE' },

                ],
            },

            {
                id: 19,
                nombre: 'PISCOS',
                items: [
                    { id: 191, nombre: 'MOSTO VERDE' },
                    { id: 192, nombre: 'TORONTEL' },
                    { id: 193, nombre: 'MOSCATEL' },
                    { id: 194, nombre: 'PISCO ITALIA' }

                ],
            },

        ],
    },
    {
        id: 2,
        nombre: 'ILUMINACIÓN',
        hijos: [
            {
                id: 21,
                nombre: 'GUIRNALDAS SOLARES',
                items: [
                    { id: 211, nombre: 'GUIRNALDAS SOLARES' },
                ],
            },
            {
                id: 22,
                nombre: 'CANDELABROS SOLARES (LED)',
                items: [
                    { id: 221, nombre: 'CANDELABROS SOLARES (LED)' },
                ],
            },

            {
                id: 23,
                nombre: 'ESTACAS PARA CAMINO (LED)',
                items: [
                    { id: 231, nombre: 'ESTACAS PARA CAMINO (LED)' },
                ],
            },


            {
                id: 24,
                nombre: 'VELAS (LED)',
                items: [
                    { id: 241, nombre: 'VELAS (LED)' },
                ],
            },


        ],
    },
    {
        id: 3,
        nombre: 'SHOW',
        hijos: [
            {
                id: 31,
                nombre: 'FESTEJO',
                items: [
                    { id: 311, nombre: 'FESTEJO' },
                ],
            },
            {
                id: 32,
                nombre: 'ZAPATEO',
                items: [
                    { id: 312, nombre: 'ZAPATEO' },
                ],
            },
            {
                id: 33,
                nombre: 'MARINERA',
                items: [
                    { id: 313, nombre: 'MARINERA' },
                ],
            }
        ],
    },

];


const datoz = [
    { id: 1, nombre: 'PASEO EN UTV DESDE HUACACHINA' },
    { id: 2, nombre: 'DECORACION CON FLORES' },
    { id: 3, nombre: 'PIQUEOS BASICOS: ACEITUNAS, JAMON, CRACKERS CON DIP' },
    { id: 4, nombre: 'TABLA DE FRUTAS DE LA ESTACIÓN' },
    { id: 5, nombre: 'ESPUMANTE IMPORTADO (1 BOTELLA CADA 3 PERSONAS)' },
    { id: 6, nombre: 'FAROLES CANDELABROS' },
    { id: 7, nombre: 'ALFOMBRA DECORATIVA' },
    { id: 8, nombre: 'GASEOSAS COCA COLA' },
    { id: 9, nombre: 'AGUA SOCOSANI CON GAS' },
    { id: 9, nombre: 'COJINES' },
    { id: 9, nombre: 'CAMINO DE MESA DECORATIVO' }
];

datoz.forEach((categoria, index) => {
    // Crear fila principal de categoría
    var filaPadre = document.createElement('tr');
    filaPadre.className = 'border-b border-gray-300';

    filaPadre.innerHTML = `
        <td class="py-2 px-4 font-bold cursor-pointer bg-gray-200 hover:bg-gray-300 toggle-row" 
            data-target="#subcategoriasy-${categoria.id}">
            ${categoria.nombre}
        </td>
        <td class="py-2 px-4">
            <textarea id="textarea-${index + 1}" rows='1' class="w-full p-2 border border-gray-300 rounded"></textarea>
        </td>
    `;

    tablaDinamicax.appendChild(filaPadre);
});

let checkboxCounter = 1;

datos.forEach(categoria => {
    // Fila principal de categoría
    var filaPadre = document.createElement('tr');
    filaPadre.className = 'border-b border-gray-300';

    filaPadre.innerHTML = `
        <td class="py-2 px-4 font-bold cursor-pointer bg-gray-200 hover:bg-gray-300 toggle-row" 
            data-target="#subcategorias-${categoria.id}">
            <input type="checkbox" id="checkbox-${checkboxCounter++}" class="mr-2"> 
            ${categoria.nombre}
        </td>
        <td class="py-2 px-4"></td>
    `;

    tablaDinamica.appendChild(filaPadre);

    // Fila de subcategorías (oculta por defecto)
    var filaSubcategorias = document.createElement('tr');
    filaSubcategorias.id = `subcategorias-${categoria.id}`;
    filaSubcategorias.className = 'hidden bg-gray-50';

    var subcategoriasHTML = '';

    categoria.hijos.forEach(subcategoria => {
        subcategoriasHTML += `
            <tr class="border-b border-gray-200">
                <td class="py-2 px-4 cursor-pointer bg-gray-100 hover:bg-gray-200 toggle-row" 
                    data-target="#items-${subcategoria.id}">
                    <input type="checkbox" id="checkbox-${checkboxCounter++}" class="mr-2"> 
                    ${subcategoria.nombre}
                </td>
                <td class="py-2 px-4"></td>
            </tr>
            <!-- Fila para los items de la subcategoría (oculta por defecto) -->
            <tr id="items-${subcategoria.id}" class="hidden bg-gray-50">
                <td colspan="2">
                    <table class="ml-8 w-full border-l border-gray-300">
                        ${subcategoria.items
                            .map(
                                item => `
                                <tr>
                                    <td class="py-2 px-4">
                                        <input type="checkbox" id="checkbox-${checkboxCounter++}" class="mr-2"> 
                                        ${item.nombre}
                                    </td>
                                    <td class="py-2 px-4">
                                        <textarea id="textarea-${checkboxCounter}" rows="1" class="w-full border border-gray-300 rounded p-1" placeholder="Observación"></textarea>
                                    </td>
                                </tr>
                            `
                            )
                            .join('')}
                    </table>
                </td>
            </tr>
        `;
    });

    filaSubcategorias.innerHTML = `
        <td colspan="2">
            <table class="ml-4 w-full border-l border-gray-300">
                ${subcategoriasHTML}
            </table>
        </td>
    `;

    tablaDinamica.appendChild(filaSubcategorias);
});
    // Agregar funcionalidad de acordeón
    document.querySelectorAll('.toggle-row').forEach(el => {
        el.addEventListener('click', function () {
            const target = document.querySelector(el.getAttribute('data-target'));
            if (target) {
                target.classList.toggle('hidden'); // Alternar visibilidad
            }
        });
    });






</script>