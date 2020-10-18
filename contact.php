<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="newform.css">
    <link rel="stylesheet" href="stylenav.css">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
    <a href="SOLO.html"><button id="customerOrder">Back</button></a>

    <div class="contact-us">
        <form action="db.php" method="POST">
            <label for="customerName">NAME <em>&#x2a;</em></label><input id="customerName" name="name"
                required="" type="text" /><label for="customerEmail">EMAIL <em>&#x2a;</em></label><input
                id="customerEmail" name="email" required="" type="email" /><label
                for="customerPhone">PHONE</label><input id="customerPhone" name="customerPhone"
                type="tel" /><label for="orderNumber">ORDER NUMBER</label><input
                id="orderNumber" name="orderNumber" type="text" /><label for="customerNote">YOUR MESSAGE
                <em>&#x2a;</em></label><textarea id="customerNote" name="message" required="" rows="4"></textarea>
            <h3>
                Please provide all the information about your issue you can.
            </h3>
            <label for="spamProtection">SPAM PROTECTION <em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;What day comes
                    before July 11th?</span></label><input id="spamProtection" name="spamProtection"
                type="text" /><a href="thankyou.html"><button id="customerOrder">SUBMIT</button></a>
        </form>
    </div>
    
    
</body>

</html>