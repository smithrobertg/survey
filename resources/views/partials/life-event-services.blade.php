<hr />
<div class="form-group row">
    <div class="form-check form-check-inline col-4">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="{{ $lifeEvent->field_name }}" value="{{ $lifeEvent->id }}">
            {{ $lifeEvent->prompt }}
        </label>
    </div>
    <div class="col-8">
        <label>Did you receive those services?</label> &nbsp;
        <div class="form-check form-check-inline text-success">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="{{ $lifeEvent->field_id }}"
                        value="Yes"> Yes
            </label>
        </div>
        <div class="form-check form-check-inline text-danger">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="{{ $lifeEvent->field_id }}"
                        value="No"> No
            </label>
        </div>
    </div>
</div>