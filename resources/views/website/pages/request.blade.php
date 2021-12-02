<article class="form">

    <div class="form__wrapper center-content">
        <h2 class="form__title highlight">Let&#8217;s get <em>started</em>.</h2>
        <div class="form__content">
            <p>Want more information about our services and how they can help you? Fill out the form
                below.</p>
        </div>
        <form action="{{route('admin.request.store')}}" method='POST'>
            @csrf
            
    <div class="acf-fields acf-form-fields -top">
        
        <div class="acf-field acf-field-text acf-field-60783ed916570 is-required" data-name="name-first"
            data-type="text" data-key="field_60783ed916570" data-required="1">
            <div class="acf-label">
                <label for="acf-field_60783ed916570">Name <span class="acf-required">*</span></label></div>
            <div class="acf-input">
                <div class="acf-input-wrap"><input type="text" id="acf-field_60783ed916570"
                        name="name" required="required" /></div>
            </div>
        </div>
        <div class="acf-field acf-field-text acf-field-60783ee916571 is-required" data-name="name-last" data-type="text"
            data-key="field_60783ee916571" data-required="1">
            <div class="acf-label">
                <label for="acf-field_60783ee916571">Address <span class="acf-required">*</span></label></div>
            <div class="acf-input">
                <div class="acf-input-wrap"><input type="text" id="acf-field_60783ee916571"
                        name="address" required="required" /></div>
            </div>
        </div>
        <div class="acf-field acf-field-text acf-field-60783ef016572 is-required" data-name="business" data-type="text"
            data-key="field_60783ef016572" data-required="1">
            <div class="acf-label">
                <label for="acf-field_60783ef016572">Location<span class="acf-required">*</span></label></div>
            <div class="acf-input">
                <div class="acf-input-wrap"><input type="text" id="acf-field_60783ef016572"
                        name="location" required="required" /></div>
            </div>
        </div>

        <div class="acf-field acf-field-textarea acf-field-60783f1216574" data-name="project" data-type="textarea"
            data-key="field_60783f1216574">
            <div class="acf-label">
                <label for="acf-field_60783f1216574">Service need</label></div>
            <div class="acf-input">
                <textarea id="acf-field_60783f1216574" name="service" rows="8"></textarea></div>
        </div>
    </div>
    <div class="acf-form-submit">
        <button class="tst-submit-spinner"><span>Submit</span><svg viewBox="0 0 50 50">
                <circle cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg></button>
    </div>
    </form>
    </div>
</article>
