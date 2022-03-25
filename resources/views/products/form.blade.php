<div class="col">
    <div class="form-group">
        <label>Name</label>
        {{ Form::input("text", "name", null, ["class" => "form-control"]) }}
    </div>
</div>

<div class="col">
    <div class="form-group">
        <label>Price (RM)</label>
        {{ Form::input("text", "price", null, ["class" => "form-control"]) }}
    </div>
</div>

<div class="col">
    <div class="form-group">
        <label>Details</label>
        {{ Form::input("text", "details", null, ["class" => "form-control"]) }}
    </div>
</div>

<div class="col">
    <div class="form-group">
        <label>Publish</label>
   <div>
        {{ Form::input("radio", "publish", "Yes", ["class" => "form-check-label"]) }}
        <label >Yes</label></div>

        {{ Form::input("radio", "publish", "No", ["class" => "form-check-label"]) }}
        <label>No</label> </div>
    </div>
</div>

