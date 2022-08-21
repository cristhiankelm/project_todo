<x-layout page="b7web">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Editar Tarefa</h1>

        <form method="POST" action="{{ route('task.update', ['id' => $task->id]) }}">
            @method('PUT')
            @csrf

            <x-form.text_input name="title" label="Titulo da task"
                               placeholder="Digite o titulo da sua Tarefa..."
                               value="{{ $task->title }}"></x-form.text_input>

            <x-form.text_input type="checkbox" name="is_done" label="Tarefa Realizada?" value="{{ $task->is_done }}"></x-form.text_input>

            <x-form.text_input type="datetime-local" name="due_date" label="Data de Realização"
                               value="{{ $task->due_date }}"></x-form.text_input>

            <x-form.select_input name="category_id" label="Categoria">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                            @if($category->id == $task->category_id)
                                selected
                        @endif>{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input label="Descrição da Tarefa" name="description"
                                   placeholder="Digite a descrição da tarefa"
                                   value="{{ $task->description }}"></x-form.textarea_input>

            <x-form.form_button resetTxt="Resetar" submitTxt="Atualizar Tarefa"></x-form.form_button>

        </form>
    </section>

</x-layout>
