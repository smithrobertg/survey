<form>
    // Text fields
    <div class="form-group">
        <label for="formGroupExampleInput">Example label</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Another label</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>

    // Inline radio buttons (Yes/No)
    <div class="form-group row">
        <label>Yes/No Question:</label>
        <div class="form-check form-check-inline has-success">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radioYes" value="Yes"> Yes
            </label>
        </div>
        <div class="form-check form-check-inline has-danger">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radioNo" value="No"> No
            </label>
        </div>
  </div>

    // Stacked check boxes
    <div class="form-group">
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="selections[]" value="">
                Option one is this and that&mdash;be sure to include why it's great
            </label>
        </div>
        <div class="form-check disabled">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="selections[]" value="" disabled>
                Option two is disabled
            </label>
        </div>
    </div>
</form>