<x-layout>

    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">
            Criar Tarefa
        </a>
    </x-slot:btn>

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
            @php
            $tasks = [
                ['id' => 1, 'done' => false, 'title' => 'Minha primeira Task', 'category' => 'Category 1'],
                ['id' => 2, 'done' => true, 'title' => 'Minha segunda Task', 'category' => 'Category 2'],
                ['id' => 3, 'done' => false, 'title' => 'Minha terceira Task', 'category' => 'Category 1'],
            ];
            @endphp
            <x-task :data=$tasks[0] />
            <x-task :data=$tasks[1] />
            <x-task :data=$tasks[2] />
        </div>
    </section>
</x-layout>
