{include file="header.tpl"}
    <section class="contenedor-bebidas">
        {if isset($smarty.session.usuario)}
            <form action="desloguiar" method="post">
                <button class="btn-session">Cerrar sesion</button>
            </form>
        {/if}
        <div class="bebidas">
            {foreach from=$bebidas item=$bebida}
                <div class="bebida" data-aos="fade-up"  data-aos-duration="2000">
                    <div class="imagenes-bebida"> 
                        <img src="css/img/{$bebida->img}" class="img-bebida">
                    </div>
                    <div class="informacion-bebida">
                        <h4>{$bebida->bebida} {$bebida->capacidad}</h4>
                        {if $bebida->individual gt 0}
                            <h5>{$bebida->individual}$</h5>
                        {/if}
                        {if $bebida->x6 gt 0}
                            <h5>pack x6: {$bebida->x6}$</h5>
                        {/if}
                        {if $bebida->x12 gt 0}
                            <h5>pack x12: {$bebida->x12}$</h5>
                        {/if}
                        {if $bebida->x24 gt 0}
                            <h5>pack x24: {$bebida->x24}$</h5>
                        {/if}
                    </div>
                    <div class="btn-pedir">
                        <a href="https://api.whatsapp.com/send?phone=542494342789&text=Hola%20que%20tal%20me%20gustaria%20hacerte%20un%20pedido%20de%20{$bebida->bebida}!!" target="_blank">
                            <button class="boton-pedir">pedir</button>
                        </a>
                    </div>
                    {if isset($smarty.session.usuario)}
                        <div class="btn-usuarios">
                            <form action="eliminar/{$bebida->id_bebida}" method="post" class="botones-usuario">
                                <button>eliminar</button>
                            </form>
                            <form action="editar/{$bebida->id_bebida}" method="post" class="botones-usuario">
                                <button class="botones-usuario">editar</button>
                            </form>
                        </div>
                    {/if}
                </div>
            {/foreach}
        </div>
    </section>
{include file="footer.tpl"}
   