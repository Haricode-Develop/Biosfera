<body id="cuerpo">
    <section id="logo">
        <img src="vistas/img/logo_completo.png" alt="">
    </section>
    <div id="contenido">
        <div id="formBody">
            <h2>Registro de cuenta</h2>
            <form action="datos" method="POST" id="f1">    
                <div id="formContent">
                    <div id="formulario" >
                        <div class="formItem">
                            <label for="fname">Nombre</label><br>
                            <input type="text" id="fname" name="username"><br>
                        </div>
                        <div class="formItem">
                            <label for="lname">Apellido</label><br>
                            <input type="text" id="lname" name="userlastname"><br>
                        </div>
                        <div class="formItem">
                            <label for="email">Correo</label><br>
                            <input type="text" id="email" name="email"><br>
                        </div>
                        <div class="formItem">
                            <label for="city">Ciudad</label><br>
                            <input type="text" id="city" name="city"><br>
                        </div>
                        <div class="formItem">
                            <label for="password">Contraseña</label><br>
                            <input type="password" id="password" name="password"><br>
                        </div>
                        <div class="formItem">
                            <label for="password">Repetir Contraseña</label><br>
                            <input type="password" id="password" name="password2"><br>
                        </div>                           
                    </div>
                    <button type="submit"  class="button" id="registrate">Registrate</button>                                               
                </div>        
            </form>

        </div>


    </div>
    <script src="vistas/js/main.js"></script>
</body>