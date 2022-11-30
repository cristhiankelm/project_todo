<x-layout page="b7web">
    <x-slot:btn>
        <a href="{{ route('register') }}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Login</h1>

        @if($errors->any())
            <ul class="alert alert-error">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('login.action') }}">
            @csrf

            <x-form.text_input type="email" name="email" label="E-mail" placeholder="Digite seu email"></x-form.text_input>

            <x-form.text_input type="password" name="password" label="Sua senha" placeholder="Digite sua senha"></x-form.text_input>

            <x-form.form_button resetTxt="Limpar" submitTxt="Logar-se"></x-form.form_button>

        </form>
    </section>
</x-layout>
