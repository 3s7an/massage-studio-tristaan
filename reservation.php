				
    <h2 class="reservation-heading">Reservation</h2>
    <p id="reservation-booking-message">Let´s book a massage right now!</p>
    <p><i class="fa-solid fa-phone" id="reservation-telephone-icon"></i>You can call us at : 602229520</p>
    <p><i class="fa-solid fa-envelope" id="reservation-mail-icon"></i>Write email on : tristan.prekop13@gmail.com</p>
    <p class="reservation-last-paragraph"><i class="fa-brands fa-wpforms" id="reservation-form-icon"></i>or simply use reservation form below</p>

    <form method="post">
        <div class="reservation-forms">
        <input type="text" placeholder="Name" name="reservation-name" value="<?php if (array_key_exists('prihlasenyUzivatel', $_SESSION)) {
    echo $_SESSION['prihlasenyUzivatel'];
} ?>">

        <input type="text" placeholder="Mobile number" name="reservation-mobile">
            <input type="email" placeholder="Email" name="reservation-email">
                <input type="select" placeholder="Message" name="reservation-message">
                    <label for="categories">Choose the type of massage</label>
                        <select name="categories">
                            <option>-- choose a type</option>
                            </select>
                    <button type="submit" name="reservation-send">Send</button>
        </div>
    </form>
    
    <p class="reservation-ending-message">We look forward to your visit, see you soon.</p>


    
    
			<?php if(array_key_exists("prihlasenyUzivatel", $_SESSION)){
        echo $_SESSION['prihlasenyUzivatel'];
        }
        else {
            echo "Ahoj to som ja";             
        }?>