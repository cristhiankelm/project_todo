<x-layout page="b7web">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>

        <form action="">

            <x-form.text_input name="title" label="Titulo da task" placeholder="Digite o titulo da sua Tarefa..."></x-form.text_input>

            <x-form.text_input type="date" name="due_date" label="Data de Realização"></x-form.text_input>


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

            <div class="input_area">
                <button type="submit" class="btn btn-primary">Criar tarefa</button>
            </div>

        </form>
    </section>

</x-layout>
