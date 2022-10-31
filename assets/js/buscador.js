let configuracionJson = 'config/config.json';

$.getJSON(configuracionJson, function(data) {
    const base_url = data.url;

    $(function() {
        $.getJSON(base_url + '/libros/getComentarios', function(comentarios) {

            get_libros(base_url, comentarios);

            $(".form-check-input").on("click", function() {


                get_libros(base_url, comentarios);
            });


        });
    });
});

function get_libros(base_url, comentarios) {
   
    let form = $("#filtros");
    
    $.ajax({
        type: "POST",
        url: base_url + "api/libros",
        data: form.serialize(),
        success: function(data) {
            $("#todosLibros").html("");

            $.each(JSON.parse(data), function(key, libro) {
                id = libro.id;
                portada = libro.imagenPortada;
                nombre = libro.nombre;
                precio = libro.precio;
                descripcion = libro.descripcion;
                estrellas = promedioEstrellas(comentarios, id);
                
                let span = "";


                if (libro.destacado == 1) {
                    span = "<span class = 'badge badge-danger destacado' > NOVEDAD </span>";
                }

                let div = "" +
                    "<div class='col-lg-4 col-md-6 mb-4'>" +
                    "<div class='card h-100'>" +
                    "<a href= " + base_url + "libros/producto/" + id + ">" +

                    "<img class = 'card-img-top' src =" + base_url + portada + ">" +

                    span

                    +"</a>" +
                    "<div class='card-body'>" +
                    "<h4 class='card-title'>" +
                    "<a href=" + base_url + "libros/producto/" + id + ">" + nombre + "</a>" + "</h4>" +
                    "<h5> $" + precio + "</h5>" +
                    "<p class='card-text'>" + descripcion + "</p>" +
                    "</div>" +
                    "<div class='card-footer'>" +
                    "<small>" + estrellas + "</small>" +
                    "</div>" +
                    "</div>" +
                    "</div>";
                $("#todosLibros").append(div);
            })

        }
    })
}

function promedioEstrellas(json_comentarios, producto_buscado) {

    let suma = 0;
    let contador = 0;
    let promedio = 0;
    let estrellas = '';

    for (let k = 0; k < json_comentarios.length; k++) {

        if (json_comentarios[k].libro_id == producto_buscado & json_comentarios[k].activo == 1) {
            suma = suma + parseInt(json_comentarios[k].valoracion);
            contador++;

        }

    }

   
    if (suma > 0) {
        promedio = Math.round(suma / contador);
    }
   
    for (let j = 0; j < promedio; j++) {
        estrellas += '&#9733; ';

    }
    for (let l = promedio; l < 5; l++) {
        estrellas += '&#9734; ';

    }
    return estrellas;

}

let Checked = null;

for (let CheckBox of document.getElementsByClassName('pick-one')){
	CheckBox.onclick = function(){
  	if(Checked!=null){
      Checked.checked = false;
      Checked = CheckBox;
    }
    Checked = CheckBox;
  }
}