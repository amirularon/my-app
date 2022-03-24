<div class="col">
    <div class="form-group">
        <label>Name</label>
        {{ Form::input("text", "name", null, ["class" => "form-control"]) }}
    </div>
</div>

<div class="col">
    <div class="form-group">
        <label>Email</label>
        {{ Form::input("text", "email", null, ["class" => "form-control"]) }}
    </div>
</div>

<div class="col">
    <div class="form-group">
        <label>Password</label>
        {{ Form::input("password", "password", null, ["class" => "form-control"]) }}
    </div>
</div>