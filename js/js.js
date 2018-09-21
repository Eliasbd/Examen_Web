var contador=0;
$(document).on("click", ".btn-primary", function(){
    contador=contador+1;
    let html=`<tr id="fila" class="selected"><td><input type="text" id="asignatura-${contador}"></td><td><input type="text" id="IP-${contador}"></td><td><input type="text" class="w-100" id="IIP-${contador}"></td><td><input type="text" class="w-100" id="IIIP-${contador}"></td><td><input type="text" class="w-100" id="IVP-${contador}"></td><td><input type="text" class="w-100" id="promedio-${contador}"></td></tr>`;
    $('#tbody').append(html);
});


