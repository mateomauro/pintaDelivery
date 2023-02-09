{include file="header.tpl"}
    <section class="contenedor-login">
        <div class="formulario-login">
            <form action="loguearse" method="post">
                <input type="email" name="email" placeholder="Ingrese su email" class="inputs">
                <input type="password" name="contraseña" placeholder="Ingrese su contraseña"  class="inputs">
                <button class="btn-login">Iniciar session</button>
            </form>
            <div class="error">
                {if $error}
                    <h4>{$error}</h4>
                {/if}
            </div>
        </div>
    </section>
{include file="footer.tpl"}
