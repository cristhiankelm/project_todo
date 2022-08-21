<x-layout page="b7web">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>

        <form action="">
            <div class="input_area">
                <label for="title">
                    Titulo da Task
                </label>
                <input id="title" name="title" placeholder="Digite o titulo da tarefa..." required>
            </div>

            <div class="input_area">
                <label for="due_date">
                    Data de Realização
                </label>
                <input type="date" id="due_date" name="due_date" placeholder="Digite o titulo da tarefa..." required>
            </div>

            <div class="input_area">
                <label for="category">
                    Data de Realização
                </label>
                <select id="category" name="category" required>
                    <option selected disabled value="">Selecione a categoria</option>
                    <option value="">Categoria qualquer</option>
                </select>
            </div>

            <div class="input_area">
                <label for="description">
                    Data de Realização
                </label>
                <textarea name="description" placeholder="Didite uma descrição para a sua tarefa"></textarea>
            </div>
        </form>
    </section>

</x-layout>
