<div class="form-group row">
    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="{{ $lifeEvent->field_name }}" value="{{ $lifeEvent->id }}">
            {{ $lifeEvent->prompt }}
        </label>
    </div>
</div>