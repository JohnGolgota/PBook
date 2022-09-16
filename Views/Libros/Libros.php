<?php include '../Inc/header.html'; ?>

<title>Colleccion <?php echo "Holi" ?></title>

<?php include '../Inc/nav.html'; ?>
<div class="ui container">

    <div class="ui cards two columns grid">
        <div class="<?php echo 'yellow'; ?> card">
            <div class="content">
                <div class="header">El problema de los tres cuerpos</div>
                <div class="meta">Liu Cixin</div>
            </div>
            <div class="image">
                <img src="https://img1.od-cdn.com/ImageType-400/5835-1/4AD/559/9D/%7B4AD5599D-BDF1-4B0C-8D09-798410DF4EFA%7DImg400.jpg">
            </div>
            <div class="content">
                <div class="meta">
                    <span>Fecha de publicación</span>
                    <span class="right floated">
                        09/09/09
                    </span>
                </div>
                <div class="meta">
                    <p>Generos</p>
                </div>
                <div class="description">
                    <a href="" class="mini ui button inverted primary">Ciencia ficción</a>
                    <a href="" class="mini ui button inverted primary">Ciencia ficción dura</a>
                </div>
            </div>
            <div class="extra content">
                <span class="right floated">
                    Joined in 2013
                </span>
                <form action="LibrosController.php" method="POST">
                    <input type="hidden" name="action" value="actualizar">
                    <span>
                        <input type="submit" href="" class="ui <?php echo 'yellow'; ?> mini button" value="Actualizar">
                        <button class="ui dropdown">
                            Libros
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a href="" class="item">Lista</a>
                                <a href="" class="item">Ingresar</a>
                            </div>
                        </button>
                    </span>
                </form>
            </div>
        </div>

<?php include '../Inc/footer.html'; ?>