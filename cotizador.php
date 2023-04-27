<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>
    <main class="contenedor">
        <h1>Cotizador</h1>
    </main>

    <form class="contenedor cotizador">
        <!--MODELO DEL DELANTAL--><!--MODELO DEL DELANTAL--><!--MODELO DEL DELANTAL--><!--MODELO DEL DELANTAL-->
        <div class="base-delantal">
            <div class="select">
                <p>Modelo de Delantal</p>
                <select name="" id="">
                    <option value="1">Cuero</option>
                    <option value="2">Cuerina</option>
                    <option value="3">Cuerina doble</option>
                    <option value="4">Tela</option>
                    <option value="5">Falda</option>
                    <option value="6">chaleco</option>
                </select>
                    
            </div>
            <div>
                <picture class="picture">
                    <source srcset="build/img/del12.webp" type="image/webp">
                    <source srcset="build/img/del12.png" type="image/png">
                    <img loading="lazy" src="build/img/del12.png" alt="Producto">
                </picture>
            </div>
        </div>

        <!--MODELO DE CORREAS--><!--MODELO DE CORREAS--><!--MODELO DE CORREAS--><!--MODELO DE CORREAS-->
        <div class="base-delantal">
            <div class="select">
                <p>Modelo de Correas</p>
                <select name="" id="">
                    <option value="1">cruzadas</option>
                    <option value="2">correa mosqueton y evilla tipo 1</option>
                    <option value="3">correa mosqueton y evilla tipo 2</option>
                </select>
            </div>
            <div>
                <picture class="picture">
                    <source srcset="build/img/del12.webp" type="image/webp">
                    <source srcset="build/img/del12.png" type="image/png">
                    <img loading="lazy" src="build/img/del12.png" alt="Producto">
                </picture>
            </div>
        </div>

        <!--MODELO DE LOGOS--><!--MODELO DE LOGOS--><!--MODELO DE LOGOS--><!--MODELO DE LOGOS--><!--MODELO DE LOGOS-->
        <div class="base-delantal">
            <div class="select">
                <p>Modelo de logos</p>
                <select name="" id="">
                    <option value="1">Cuero</option>
                    <option value="2">Cuerina</option>
                    <option value="3">Cuerina doble</option>
                    <option value="4">Tela</option>
                    <option value="5">Falda</option>
                    <option value="6">chaleco</option>
                </select>      
            </div>
            <div>
                <picture class="picture">
                    <source srcset="build/img/logo lazer.webp" type="image/webp">
                    <source srcset="build/img/logo lazer.png" type="image/png">
                    <img loading="lazy" src="build/img/logo lazer.png" alt="Producto">
                </picture>
            </div>
        </div>

        <!--MODELO DE BOLSILLOS--><!--MODELO DE BOLSILLOS--><!--MODELO DE BOLSILLOS--><!--MODELO DE BOLSILLOS--><!--MODELO DE BOLSILLOS-->
        <div class="base-delantal">
            <div class="select">
                <p>Tipo de bolsillos</p>
                <select name="" id="">
                    <option value="1">cruzadas</option>
                    <option value="2">correa mosqueton y evilla tipo 1</option>
                    <option value="3">correa mosqueton y evilla tipo 2</option>
                </select>

                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" placeholder="cantidad" min="0" max="4">

            </div>
            <div>
                <picture class="picture">
                    <source srcset="build/img/logo lazer.webp" type="image/webp">
                    <source srcset="build/img/logo lazer.png" type="image/png">
                    <img loading="lazy" src="build/img/logo lazer.png" alt="Producto">
                </picture>
            </div>
        </div>

        <!--MODELO DE ACSESORIO--><!--MODELO DE ACSESORIO--><!--MODELO DE ACSESORIO--><!--MODELO DE ACSESORIO--><!--MODELO DE ACSESORIO-->
        <div class="base-delantal">
            <div class="select">
                <p>Tipo de Acsesorio</p>
                <select name="" id="">
                    <option value="1">cruzadas</option>
                    <option value="2">correa mosqueton y evilla tipo 1</option>
                    <option value="3">correa mosqueton y evilla tipo 2</option>
                </select>

                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" placeholder="cantidad" min="0" max="4">

            </div>
            <div>
                <picture class="picture">
                    <source srcset="build/img/logo lazer.webp" type="image/webp">
                    <source srcset="build/img/logo lazer.png" type="image/png">
                    <img loading="lazy" src="build/img/logo lazer.png" alt="Producto">
                </picture>
            </div>
        </div>

        <!--MODELO DE ACSESORIO2--><!--MODELO DE ACSESORIO--><!--MODELO DE ACSESORIO--><!--MODELO DE ACSESORIO--><!--MODELO DE ACSESORIO-->
        <div class="base-delantal">
            <div class="select">
                <p>Tipo de Acsesorio</p>
                <select name="" id="">
                    <option value="1">cruzadas</option>
                    <option value="2">correa mosqueton y evilla tipo 1</option>
                    <option value="3">correa mosqueton y evilla tipo 2</option>
                </select>

                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" placeholder="cantidad" min="0" max="4">

            </div>
            <div>
                <picture class="picture">
                    <source srcset="build/img/logo lazer.webp" type="image/webp">
                    <source srcset="build/img/logo lazer.png" type="image/png">
                    <img loading="lazy" src="build/img/logo lazer.png" alt="Producto">
                </picture>
            </div>
        </div>
    </form>

<?php 
    incluirTemplate('footer');
?>
