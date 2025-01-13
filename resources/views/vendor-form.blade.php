<h1>Vendor Form</h1>
<form action="vendor-form" method="post">
    @csrf 

    @if (session('success'))
        <div class="alert">
            {{session('success')}}
        </div>
    
    @endif

    <div>
        <input type="text" placeholder="Enter your name" id="name" name="name" value="{{old('name')}}"
        class="{{$errors->first('name')?'input-error':''}}"><br>
        <span style="color:red">@error('name'){{$message}}@enderror</span>
    </div>
    <br>
    <div>
        <input type="text" placeholder="Enter your surname" id="surname" name="surname" value="{{old('surname')}}"
        class="{{$errors->first('surname')?'input-error':''}}"><br>
        <span style="color:red">@error('surname'){{$message}}@enderror</span>
    </div>
    <br>
    <div>
        <input type="text" placeholder="Enter your Company" id="company_name" name="company_name" value="{{old('company_name')}}"
        class="{{$errors->first('company_name')?'input-error':''}}"><br>
        <span style="color:red">@error('company_name'){{$message}}@enderror</span>
    </div>
    <br>
    <div>
        <input type="text" placeholder="Enter your phone" id="phone" name="phone" value="{{old('phone')}}"
        class="{{$errors->first('phone')?'input-error':''}}"><br>
        <span style="color:red">@error('phone'){{$message}}@enderror</span>
    </div>
    <br>
    <div>
        <input type="textarea" placeholder="" id="message" name="message" value="{{old('message')}}"><br>
        <span style="color:red">@error('message'){{$message}}@enderror</span>
    </div>
    <br>
    <!-- <div>
        <h5>Servicess</h5>
        <input type="checkbox" id="webdev" name="services[]" value="Webdev">
        <label for="webdev">Webdev</label><br>
        <input type="checkbox" id="seo" name="services[]" value="seo">
        <label for="seo">SEO</label><br>
        <input type="checkbox" id="sem" name="services[]" value="semdev">
        <label for="sem">SEM</label><br>
        <input type="checkbox" id="social" name="services[]" value="socialdev">
        <label for="social">Social</label><br>
        <input type="checkbox" id="desgin" name="services[]" value="desgin">
        <label for="desgin">Desgin</label><br>
        <input type="checkbox" id="tp" name="services[]" value="tp">
        <label for="tp">Tp</label><br>
    </div>

    <div>
        <h5>Gender</h5>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
    </div>

    <div>
        <h5>City</h5>
        <select name="city">
            <option value="Mumbai">Mumbai</option>
            <option value="Pune">Pune</option>
            <option value="Thane">Thane</option>
            <option value="Navi-Mumbai">Navi-Mumbai</option>
        </select>
    </div>
    <br> -->
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

<!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>

<style>
    .input-error{
        border: 1px solid red;
    }

    .alert{
        background-color: green;
        color: white;
        padding: 10px;
        margin-bottom: 10px;
    }

    
</style>
