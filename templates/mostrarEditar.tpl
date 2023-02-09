{include file="header.tpl"}
    <section class="contenedor-editar">
        <div class="bebida-editar">
            <div class="imagenes-bebida"> 
                <img src="css/img/{$bebida->img}" class="img-bebida">
            </div>
            <div class="informacion-bebida">
                <form action="modificar/{$bebida->id_bebida}" method="post">
                    <input type="text" placeholder="bebida: {$bebida->bebida}" name="bebida">
                    <input type="text" placeholder="capacidad: {$bebida->capacidad}" name="capacidad">
                    <input type="number" placeholder="Precio: {$bebida->individual}$" name="precio">
                    <input type="number" placeholder="pack x6: {$bebida->x6}$" name="x6">
                    <input type="number" placeholder="pack x12: {$bebida->x12}$" name="x12">
                    <input type="number" placeholder="pack x24: {$bebida->x24}$" name="x24">
                    <button>Modificar</button>
                </form>
            </div>
        </div>
    </section>
{include file="footer.tpl"}
