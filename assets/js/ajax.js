$('#botonRegistrarse').click(function(){
    if($('#codigo').val() == ""){
        return false;
    }
    if($('#nombre').val() == ""){
        return false;
    }
    if($('#apellido').val() == ""){
        return false;
    }
    if($('#fecha').val() == ""){
        alert("Introduzca Fecha de Nacimiento");
        return;
    }
    $.ajax({
        type: "post",
        url: "registrar.php",
        data: $('#formRegistrarse').serialize(),
        //dataType: "dataType",
        success: function (response) {
            $('#modalRegistrarse').modal('hide');
            data = JSON.parse(response);
            document.getElementById('respuesta').innerHTML="";
            for(item of data)
            {

                fecha = item['fecha_nacimiento'];
                let currDate =  new Date(fecha).toISOString().slice(0, 10).split('-').reverse().join('/');                
                document.getElementById('respuesta').innerHTML += `
                    <tr>
                        <td>${item['codigo']}</td>
                        <td>${item['nombre']}</td>
                        <td>${item['apellido']}</td>
                        <td>${item['profesion']}</td>
                        <td>${currDate}</td>
                        <td><a href="#" class="eliminar" id="${item['id']}"><img src="assets/imagenes/eliminar.svg"></a></td>
                        <td><a href="#" class="editar" id="${item['id']}"><img src="assets/imagenes/editar.svg"></a></td>
                    </tr> 
                `
            }
            document.getElementById('formRegistrarse').reset();
        }
    });
});


$(document).on('click', '.eliminar', function(){
    var id= $(this).attr('id');
    $.ajax({
        type: "post",
        url: "eliminar.php",
        data: { id:id },
        success: function (response) {
            data = JSON.parse(response);
            document.getElementById('respuesta').innerHTML="";
            for(item of data)
            {
                fecha = item['fecha_nacimiento'];
                let currDate =  new Date(fecha).toISOString().slice(0, 10).split('-').reverse().join('/');    
                document.getElementById('respuesta').innerHTML += `
                    <tr>
                        <td>${item['codigo']}</td>
                        <td>${item['nombre']}</td>
                        <td>${item['apellido']}</td>
                        <td>${item['profesion']}</td>
                        <td>${currDate}</td>
                        <td><a href="#" class="eliminar" id="${item['id']}"><img src="assets/imagenes/eliminar.svg"></a></td>
                        <td><a href="#" class="editar" id="${item['id']}"><img src="assets/imagenes/editar.svg"></a></td>
                    </tr> 
                `
            }
        },
        error: function() {
            alert('error en Ajax');
        }
    });
});

$(document).on('click', '.editar', function(){
    var id= $(this).attr('id');
    $.ajax({
        type: "post",
        url: "editar.php",
        data: { id:id },
        success: function (response) {
            data = JSON.parse(response);
            $('#modalEditar').modal('show');
            $('#codigoEditar').val(data[0].codigo);
            $('#nombreEditar').val(data[0].nombre);
            $('#apellidoEditar').val(data[0].apellido);
            $('#profesionEditar').val(data[0].profesion);
            $('#fechaEditar').val(data[0].fecha_nacimiento);
            $('#idEditar').val(data[0].id);            
        },
        error: function() {
            alert('error en Ajax');
        }
    });
});

$('#botonEditar').click(function(){
    if($('#fechaEditar').val() == ""){
        alert("Introduzca Fecha Nacimiento");
        return;
    }
    $.ajax({
        type: "post",
        url: "grabarEditar.php",
        data: $('#formEditar').serialize(),
        success: function (response) {            
            data = JSON.parse(response);
            $('#modalEditar').modal('hide');
            console.log(data);
            document.getElementById('respuesta').innerHTML="";
            for(item of data)
            {
                fecha = item['fecha_nacimiento'];
                let currDate =  new Date(fecha).toISOString().slice(0, 10).split('-').reverse().join('/');  
                document.getElementById('respuesta').innerHTML += `
                    <tr>
                        <td>${item['codigo']}</td>
                        <td>${item['nombre']}</td>
                        <td>${item['apellido']}</td>
                        <td>${item['profesion']}</td>
                        <td>${currDate}</td>
                        <td><a href="#" class="eliminar" id="${item['id']}"><img src="assets/imagenes/eliminar.svg"></a></td>
                        <td><a href="#" class="editar" id="${item['id']}"><img src="assets/imagenes/editar.svg"></a></td>
                    </tr> 
                `
            }
        },
        error: function() {
            alert('error en Ajax');
        }
    });
});
