<div class="input_area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <select id="{{ $name }}" name="{{ $name }}"
        {{ empty($required) ? '' : 'required' }}>
        <option selected disabled value="">Selecione uma opcão</option>
        {{ $slot }}
    </select>
</div>
