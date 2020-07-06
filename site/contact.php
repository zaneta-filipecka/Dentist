<section class="container flexGrow">
    <h1 class="title">Napisz do nas</h1>
    <div class="container">
        <form action="/Dentist/contact" class="contact-form" method="POST">

            <div class="col-half">
                <label for="fname">Imię</label>
                <input
                    value="<?php echo !empty($parsedBody) ? $parsedBody['firstname'] : '' ?>"
                    type="text"
                    id="fname"
                    name="firstname"
                    placeholder="Twoje imię.."
                >
            </div>
            <div class="col-half">
                <label for="lname">Nazwisko</label>
                <input
                    value="<?php echo !empty($parsedBody) ? $parsedBody['lastname'] : '' ?>"
                    type="text" 
                    id="lname" 
                    name="lastname" 
                    placeholder="Twoje nazwisko..">
            </div>
            <div class="col">
                <label for="country">Kraj</label>
                <select id="country" name="country">
                    <option value="poland">Polska</option>
                    <option value="ukraine">Ukraina</option>
                    <option value="usa">USA</option>
                    <option value="greatbritain">Wielka Brytania</option>
                </select>
            </div>
            <div class="col">
                <label for="subject">Temat</label>
                <textarea id="subject" name="subject" placeholder="Napisz coś" style="height:200px"><?php echo !empty($parsedBody) ? $parsedBody['subject'] : '' ?></textarea>
            </div>
            <?php if(!empty($message)): ?>
                <div>
                    <?php echo $message ?>
                </div>
            <?php endif ?>
            <div class="col to-right">
                <button type="submit">
                    Wyślij
                </button>
            </div>

        </form>
    </div>
</section>