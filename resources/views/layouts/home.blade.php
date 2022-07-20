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
        <img src="/assets/images/logo.png" alt="">
    </div>
    <div class="content">
        <nav>
            <a href="#" class="btn btn-primary">
                Criar Tarefa
            </a>
        </nav>
        <main>
            <section class="graph">
                <div class="graph_header">
                    <h2>Progresso do dia</h2>
                    <div class="graph_header_line"></div>
                    <div class="graph_header_date">
                        <img src="/assets/images/icon-prev.png" alt="">
                        13 dez
                        <img src="/assets/images/icon-next.png" alt="">
                    </div>
                </div>
                <div class="graph_header_subtitle"> Tarefas: <b>3/6</b></div>

                <div class="graph-placeholder">
                </div>

                <div class="tasks_left_footer">
                    <img src="/assets/images/icon-info.png" alt="">
                    Restam 3 tarefas para serem realizadas
                </div>
            </section>

            <section class="list">
                <div class="list_header">
                    <select name="" class="list_header_select">
                        <option value="1">Todas as tarefas</option>
                    </select>
                </div>
                <div class="task_list">
                    <div class="task">
                        <div class="title">
                            <input type="checkbox">
                            <div class="task_title">Titulo da Tarefa</div>
                        </div>
                        <div class="priority">
                            <div class="sphere"></div>
                            <div>Titulo da Tarefa</div>
                        </div>
                        <div class="actions">
                            <a href="#"><img src="/assets/images/icon-edit.png" alt=""></a><a href="#"><img
                                    src="/assets/images/icon-delete.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

</body>
</html>
