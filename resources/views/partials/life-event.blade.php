<div class="form-group row ml-3">
    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="{{ $lifeEvent->field_name }}" value="{{ $lifeEvent->id }}">
            {{ $lifeEvent->prompt }}
        </label>
    </div>
</div>