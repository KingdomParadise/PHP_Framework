---
title: 'Support'
metadata:
    description: 'Our skilled support staff includes engineers and people with trading experience, so expect a prompt solution to any problem'
body_classes: 'sayhi'
form:
    name: contact
    fields:
        -
            name: 'What do you need?'
            type: select
            size: long
            options:
                - Support
                - Sales
                - 'Upgrade/Downgrade Plan'
                - 'Cancel Service'
                - Affiliates
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
        -
            name: message
            label: Message
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recaptcha_site_key: 6LfkIJMUAAAAAO3GvU2E-teI68wuW-VP4TTjCQUG
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
        -
            type: reset
            value: Reset
    process:
        -
            captcha:
                recaptcha_secret: 6LfkIJMUAAAAAP80fWG-2N8vNzXpoyCE7vHhppVv
        -
            email:
                subject: '[ChartVPS Support] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: '<i class="fas fa-check-circle"></i> Message received - thank you for getting in touch!'
---

## Talk To Us

We'll get back to you within few hours. If you prefer instant messaging skip the form and <a href="#support" onclick="$crisp.push(['do', 'chat:open'])" class="bolded">chat with us</a> or call us toll-free (US/Canada) <a href="tel:+1-888-237-7606" class="bolded">1 (888) 237-7606</a>.