<x-layout page="b7web">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>

        <form action="">

            <x-form.text_input name="title" label="Titulo da task"
                               placeholder="Digite o titulo da sua Tarefa..."></x-form.text_input>

            <x-form.text_input type="date" name="due_date" label="Data de Realização"></x-form.text_input>

            <x-form.select_input name="category" label="Categoria">
                <option value="">Valor qualquer</option>
            </x-form.select_input>

            <x-form.textarea_input name="description"
                                   placeholder="Digite a descrição da tarefa"></x-form.textarea_input>

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa"></x-form.form_button>

        </form>
    </section>

</x-layout>
