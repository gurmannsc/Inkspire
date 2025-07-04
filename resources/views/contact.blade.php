<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    @include('header')
    <div class="container">
        <div class="content">
            <div class="contentContact">
                <div class="contentLeft">
                    <h1>Get in Touch</h1>
                    <h4 id="h4Contact">We'd love to hear from you!<br>Whether you have a question, feedback, partnership idea, or just want to say hello — Inkspire is always just a message away.</h4>
                    <h2 id="preferEmailHeading">Prefer Email?</h2>
                    <p id="contactUs_Text">General Inquiries:<br>    ➨ <a href="mailto:support@inkspire.ai">support@inkspire.ai</a><br><span style="display: block; margin-top: 4px;">Partnerships & Collaborations:<br>    ➨ <a href="mailto:partners@inkspire.ai">partners@inkspire.ai</a><br><span style="display: block; margin-top: 4px;">Technical Support:<br>    ➨ <a href="mailto:help@inkspire.ai">help@inkspire.ai</a></span></p>
                </div>
                <div class="contentForm_right">
                    <form action="#" class="contentForm">
                        <input type="text" id="name" class="contactForm_input" placeholder="Your name">
                        <input type="email" class="contactForm_input" placeholder="E-mail address">
                        <input type="number" class="contactForm_input" placeholder="Phone number">
                        <textarea class="contactForm_input" id="userMessage" row="4" cols="100" placeholder="Your message"></textarea>
                        <button type="submit" class="contactUs_button"><a href="#">Submit</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>