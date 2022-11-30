<x-layout page="b7web">
    <x-slot:btn>
        <a href="{{ route('login') }}" class="btn btn-primary">
            Já possui conta? Faça Login
        </a>
    </x-slot:btn>

        <section id="task_section">
            <h1>Registrar Usuário</h1>

            <form method="POST" action="{{ route('register.action') }}">
                @csrf

                <x-form.text_input name="name" label="Seu nome"
                                   placeholder="Digite seu nome..."></x-form.text_input>

                <x-form.text_input type="email" name="email" label="E-mail" placeholder="Digite seu melhor email"></x-form.text_input>

                <x-form.text_input type="password" name="password" label="Sua senha" placeholder="Digite sua senha"></x-form.text_input>

                <x-form.text_input type="password" name="password_confirmation" label="Confirme sua senha" placeholder="Confirme sua senha"></x-form.text_input>

                <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se"></x-form.form_button>

            </form>
        </section>

</x-layout>
