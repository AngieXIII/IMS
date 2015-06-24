<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <?php include 'inc/head_common.php'; ?>
        <title>Instituto Misioneras Seculares</title>
    </head>
    <body id="fondo">
        <div class="web">
        <?php include 'inc/header_1.php'; ?>
        <p id="vive_origen_movil">¡Te damos la bienvenida!</p>
    </div>
   
    <!--//BLOQUE COOKIES-->
    <div id="barraaceptacion">
        <div class="inner">
            Solicitamos su permiso para obtener datos estad&iacute;sticos de su navegaci&oacute;n en esta web, en cumplimiento del Real Decreto-ley 13/2012. Si contin&uacute;a navegando consideramos que acepta el uso de cookies.
            <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a> | 
            <a href="politicadecookies.html" target="_blank" class="info">M&aacute;s informaci&oacute;n</a>
        </div>
    </div>
    <script>
        function getCookie(c_name) {
            var c_value = document.cookie;
            var c_start = c_value.indexOf(" " + c_name + "=");
            if (c_start == -1) {
                c_start = c_value.indexOf(c_name + "=");
            }
            if (c_start == -1) {
                c_value = null;
            } else {
                c_start = c_value.indexOf("=", c_start) + 1;
                var c_end = c_value.indexOf(";", c_start);
                if (c_end == -1) {
                    c_end = c_value.length;
                }
                c_value = unescape(c_value.substring(c_start, c_end));
            }
            return c_value;
        }

        function setCookie(c_name, value, exdays) {
            var exdate = new Date();
            exdate.setDate(exdate.getDate() + exdays);
            var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
            document.cookie = c_name + "=" + c_value;
        }

        if (getCookie('tiendaaviso') != "1") {
            document.getElementById("barraaceptacion").style.display = "block";
        }
        function PonerCookie() {
            setCookie('tiendaaviso', '1', 365);
            document.getElementById("barraaceptacion").style.display = "none";
        }
    </script>
    <!--//FIN BLOQUE COOKIES-->
    <form id="oculto" action="gracias.html"  method="post">
        <input type="hidden" id="datos" name="datos" value="" />
        <input type="hidden" id="horario_e" name="horario_e" value="" />
        <input type="hidden" id="conforme" name="conforme" value="" />
        <input type="hidden" id="publi" name="publi" value="" />
    </form>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/adapt.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
