<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Departamento de Becas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FCDE9C;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px;
            text-align: center;
        }

        h1 {
            color: #333333;
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            color: #666666;
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.5;
        }
        

        .navbar {
            background-color: #BA5A31;
            padding: 10px;
            margin-bottom: 5px;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .navbar li {
            display: inline;
            margin-right: 10px;
        }

        .navbar li a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px 10px;
        }

        .navbar li a:hover {
            color: #cccccc;
        }

        .features {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .feature {
            flex-basis: 33.33%;
            padding: 20px;
        }

        .feature-icon {
            font-size: 48px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 24px;
            color: #333333;
            margin-bottom: 10px;
        }

        .feature-description {
            color: #666666;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a onclick="window.location.href = '<?= $this->Url->build(['controller' => 'InfoBecas', 'action' => 'index']) ?>'">
                informacion de Becas
            </a></li>
            <li><a onclick="window.location.href = '<?= $this->Url->build(['controller' => 'Beca', 'action' => 'index']) ?>'">
                Becas Disponibles
            </a></li>
            <li><a onclick="window.location.href = '<?= $this->Url->build(['controller' => 'Carreras', 'action' => 'index']) ?>'">
                Carrera
            </a></li>
            <li><a onclick="window.location.href = '<?= $this->Url->build(['controller' => 'InfoEscolar', 'action' => 'index']) ?>'">
                Infomacion Escolar
            </a></li>
            <li><a onclick="window.location.href = '<?= $this->Url->build(['controller' => 'InfoPersonal', 'action' => 'index']) ?>'">
                Infomacion Personal
            </a></li>
            <li><a onclick="window.location.href = '<?= $this->Url->build(['controller' => 'PagosBecas', 'action' => 'index']) ?>'">
                Pagos de becas
            </a></li>
            <li><a onclick="window.location.href = '<?= $this->Url->build(['controller' => 'Semestre', 'action' => 'index']) ?>'">
                Semestre
            </a></li>
        </ul>
    </div>
<br>
    <div class="container">
        <h1>Bienvenido al Departamento de Becas</h1>
        <p>¡Trabajamos para brindar oportunidades de educación a estudiantes talentosos! Explora nuestras becas y descubre cómo podemos ayudarte a alcanzar tus metas académicas.</p>  
    </div>
</body>
</html>
