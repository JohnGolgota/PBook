<?php include '../Inc/header.html'; ?>

<title>Colleccion <?php echo "Holi" ?></title>
</head>

<body>
    <!-- Nav  -->
    <div class="ui stackble menu">
        <div class="item">
            <a href="" class="ui item">
                <img src="../Public/Img/" alt="Logo" srcset="">
            </a>
        </div>
        <div class="ui dropdown item">
            Libros
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="" class="item">Lista</a>
                <a href="" class="item">Ingresar</a>
            </div>
        </div>
        <div class="ui dropdown item">
            Autores
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="" class="item">Registrar</a>
                <a href="" class="item">Listado</a>
            </div>
        </div>
        <div class="right menu">
            <div class="item">
                <div class="ui icon input">
                    <input type="text" placeholder="Search...">
                    <i class="search link icon"></i>
                </div>
            </div>
            <div class="ui dropdown item">
                Libros
                <i class="user icon"></i>
                <div class="menu">
                    <a href="" class="item">Lista</a>
                    <a href="" class="item">Ingresar</a>
                    <a class="ui item">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="ui container">


        <h1>
            Esto no es include
        </h1>
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
                        <a>Gen</a>
                    </div>
                    <div class="description">
                        <a href="" class="mini ui button inverted primary">Ciencia ficción</a>
                        <a href="" class="mini ui button inverted primary">Ciencia ficción dura</a>
                    </div>
                </div>
                <div class="extra content">
                    <form action="LibrosController.php?action=editstatus" method="POST">
                        <span class="right floated">
                            Joined in 2013
                        </span>
                        <span>
                            <a href="" class="ui inverted <?php echo 'yellow'; ?> mini button">+</a>
                        </span>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="/images/avatar2/large/molly.png">
                </div>
                <div class="content">
                    <div class="header">Molly</div>
                    <div class="meta">
                        <span class="date">Coworker</span>
                    </div>
                    <div class="description">
                        Molly is a personal assistant living in Paris.
                    </div>
                </div>
                <div class="extra content">
                    <span class="right floated">
                        Joined in 2011
                    </span>
                    <span>
                        <i class="user icon"></i>
                        35 Friends
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="/images/avatar2/large/elyse.png">
                </div>
                <div class="content">
                    <div class="header">Elyse</div>
                    <div class="meta">
                        <a>Coworker</a>
                    </div>
                    <div class="description">
                        Elyse is a copywriter working in New York.
                    </div>
                </div>
                <div class="extra content">
                    <span class="right floated">
                        Joined in 2014
                    </span>
                    <span>
                        <i class="user icon"></i>
                        151 Friends
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="/images/avatar2/large/elyse.png">
                </div>
                <div class="content">
                    <div class="header">Elyse</div>
                    <div class="meta">
                        <a>Coworker</a>
                    </div>
                    <div class="description">
                        Elyse is a copywriter working in New York.
                    </div>
                </div>
                <div class="extra content">
                    <span class="right floated">
                        Joined in 2014
                    </span>
                    <span>
                        <i class="user icon"></i>
                        151 Friends
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="/images/avatar2/large/elyse.png">
                </div>
                <div class="content">
                    <div class="header">Elyse</div>
                    <div class="meta">
                        <a>Coworker</a>
                    </div>
                    <div class="description">
                        Elyse is a copywriter working in New York.
                    </div>
                </div>
                <div class="extra content">
                    <span class="right floated">
                        Joined in 2014
                    </span>
                    <span>
                        <i class="user icon"></i>
                        151 Friends
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="/images/avatar2/large/elyse.png">
                </div>
                <div class="content">
                    <div class="header">Elyse</div>
                    <div class="meta">
                        <a>Coworker</a>
                    </div>
                    <div class="description">
                        Elyse is a copywriter working in New York.
                    </div>
                </div>
                <div class="extra content">
                    <span class="right floated">
                        Joined in 2014
                    </span>
                    <span>
                        <i class="user icon"></i>
                        151 Friends
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="/images/avatar2/large/elyse.png">
                </div>
                <div class="content">
                    <div class="header">Elyse</div>
                    <div class="meta">
                        <a>Coworker</a>
                    </div>
                    <div class="description">
                        Elyse is a copywriter working in New York.
                    </div>
                </div>
                <div class="extra content">
                    <span class="right floated">
                        Joined in 2014
                    </span>
                    <span>
                        <i class="user icon"></i>
                        151 Friends
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="/images/avatar2/large/elyse.png">
                </div>
                <div class="content">
                    <div class="header">Elyse</div>
                    <div class="meta">
                        <a>Coworker</a>
                    </div>
                    <div class="description">
                        Elyse is a copywriter working in New York.
                    </div>
                </div>
                <div class="extra content">
                    <span class="right floated">
                        Joined in 2014
                    </span>
                    <span>
                        <i class="user icon"></i>
                        151 Friends
                    </span>
                </div>
            </div>
        </div>
    </div>
    desprecio
    <div class="ui modal">
        <div class="header">Header</div>
        <div class="content">
            <p></p>
        </div>
        <div class="actions">
            <div class="ui approve button">Approve</div>
            <div class="ui button">Neutral</div>
            <div class="ui cancel button">Cancel</div>
        </div>
    </div>

    <?php include '../Inc/footer.html'; ?>
    <script>
        $('.fullscreen.modal')
            .modal('show');
    </script>