
<link rel="stylesheet" href="{{asset('css/form.css')}}">

    <div class="cms-cta-container">
        <div class="cms-cta-heading">💡 Struggling to Find the Perfect Software Solution?</div>
        <div class="cms-cta-subtext">Get a Custom CMS Built for Your Business</div>
        <p>Trusted by businesses looking for innovation, security, and scalability.</p>
        <form id="cms-cta-form" method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="cms-cta-input" id="cms-name" name="name" placeholder=" " required>
                <label for="cms-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="cms-cta-input" id="cms-email" name="email"  placeholder=" " required>
                <label for="cms-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="cms-cta-input" id="cms-phone" name="phone_number"  placeholder=" " required>
                <label for="cms-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="cms" required>                
            </div>
            <div class="input-group"> 
                <input type="url" class="cms-cta-input" id="cms-existing-website" name="web_url"  placeholder=" ">
                <label for="cms-existing-website">Existing Website (if any)</label>
            </div>
            <div class="input-group">
                <input type="text" class="cms-cta-input" id="cms-budget" name="budget"  placeholder=" " required>
                <label for="cms-budget">Your Development Budget</label>
            </div>
            <div class="input-group">
                <textarea class="cms-cta-input" id="cms-requirements" name="Requirement"  placeholder=" "></textarea>
                <label for="cms-requirements">Specific CMS Features You Need</label>
            </div>
            <div class="input-group">
                <select class="cms-cta-select" id="cms-platform" name="category" >
                    <option value="wordpress">WordPress</option>
                    <option value="joomla">Joomla</option>
                    <option value="drupal">Drupal</option>
                    <option value="custom">Custom CMS Development</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <button type="submit" class="cms-cta-button">💡 Get Your Free CMS Consultation</button>
        </form>
    </div>
