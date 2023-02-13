$(document).ready(
    function() {
        const $btnCargarDatos = $("#btnCargarDatos"), $image = $("#image");
        $btnCargarDatos.click(function() {
            $.get("peliculas.jpg", function(data) {
                console.log(data);
                var img = $('<img id="image_id">');
                $img.attr('src', 'data:image/gif;base64,' + data.base64Data);
                //$img.appendTo('#image');
            });
            
        });
    }
    );