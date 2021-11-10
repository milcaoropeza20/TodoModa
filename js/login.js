addEventQ(window, 'load', inicializarEventos, false);
var usuario, password;
function inicializarEventos(){
    document.getElementById('correo').value = '';
    document.getElementById('password').value = '';
}
function validar(){
    usuario = document.getElementById('correo').value;
    password = document.getElementById('password').value;
    if(usuario!='' && password!=''){
        return true;
    }else {
        return false;
    }
}
function ingresar(){
    //PREVENCION DE REFRESH DE PAGINA
    event.preventDefault();
    var banderaValida=validar();
    if (banderaValida) {
        console.log("Es valido");
        usuario = document.getElementById('correo').value;
        password = document.getElementById('password').value;
        console.log(usuario);
        console.log(password);
        //**INSERCION DE AJAX */
        $.ajax({
            URL: 'login.php',
            method: 'GET',
            data: {'usuario': usuario, 'passsword': password},
            success:function(response) {
                console.log(response);
                console.log(JSON.parse(response));

                if(response!=-1){
                    window.localStorage.setItem("usuario", response);
                    location.href="index.html";
                }else {
                    console.log("Usuario no registrado");
                    var formulario = document.getElementsByClassName("form-signin");
                    var alerta = document.createElement("div");
                    alerta.setAttribute("class", "alert alert danger");
                    alerta.setAttribute("role", "alert");
                    var texto = document.createTextNode("Usuario no valido");
                    alerta.appendChild(texto);
                    formulario[0].appendChild(alerta);
                }
            },
            error:function(){
                console.log("No se puede obtener la información requerida")
            }
        });
    } else {
        console.log("No es valido");
    }
}