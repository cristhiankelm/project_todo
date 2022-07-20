<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoApp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&family=Source+Code+Pro:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="container">
    <div class="sidebar">
        Logo
    </div>
    <div class="content">
        <nav>
            <a href="#" class="btn btn-primary">
                Criar Tarefa
            </a>
        </nav>
        <main>
            <section class="graph">
                <div className="graph_header">
                    <h2>Progresso do dia</h2>
                    <hr class="LinhaHeader"/>
                    Data
                </div>
                <div class="graph_header_subtitle"> Tarefas: <b>3/6</b></div>
            </section>
            <section class="list">
                Lista
            </section>
        </main>
    </div>
</div>

</body>
</html>
