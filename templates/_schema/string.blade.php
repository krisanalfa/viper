<input class="form-control"
    type="text"
    name="{{ $name }}"
    value="{{ $value }}"
    placeholder="{{ $label }}"
    autocomplete="off"
    {{ (f('controller.method') === 'read') ? 'readonly disabled' : '' }}
/>
