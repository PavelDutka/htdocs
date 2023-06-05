<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/user/pages/03.Contact/form.md',
    'modified' => 1685906585,
    'size' => 1131,
    'data' => [
        'header' => [
            'title' => 'Contact',
            'form' => [
                'name' => 'contact-form',
                'fields' => [
                    'name' => [
                        'label' => 'Name',
                        'placeholder' => 'Enter your name',
                        'autofocus' => 'on',
                        'autocomplete' => 'on',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'email' => [
                        'label' => 'Email',
                        'placeholder' => 'Enter your email address',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    'submit' => [
                        'type' => 'submit',
                        'value' => 'Submit'
                    ],
                    'reset' => [
                        'type' => 'reset',
                        'value' => 'Reset'
                    ]
                ],
                'process' => [
                    'email' => [
                        'from' => '{{ config.plugins.email.from }}',
                        'to' => [
                            0 => '{{ config.plugins.email.to }}',
                            1 => '{{ form.value.email }}'
                        ],
                        'subject' => '[Feedback] {{ form.value.name|e }}',
                        'body' => '{% include \'forms/data.html.twig\' %}'
                    ],
                    'save' => [
                        'fileprefix' => 'feedback-',
                        'dateformat' => 'Ymd-His-u',
                        'extension' => 'txt',
                        'body' => '{% include \'forms/data.txt.twig\' %}'
                    ],
                    'message' => 'Thank you for your feedback!',
                    'display' => 'thankyou'
                ]
            ]
        ],
        'frontmatter' => 'title: Contact
form:
    name: contact-form
    fields:
        name:
          label: Name
          placeholder: Enter your name
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        email:
          label: Email
          placeholder: Enter your email address
          type: email
          validate:
            required: true

    buttons:
        submit:
          type: submit
          value: Submit
        reset:
          type: reset
          value: Reset

    process:
        email:
          from: "{{ config.plugins.email.from }}"
          to:
            - "{{ config.plugins.email.to }}"
            - "{{ form.value.email }}"
          subject: "[Feedback] {{ form.value.name|e }}"
          body: "{% include \'forms/data.html.twig\' %}"
        save:
          fileprefix: feedback-
          dateformat: Ymd-His-u
          extension: txt
          body: "{% include \'forms/data.txt.twig\' %}"
        message: Thank you for your feedback!
        display: thankyou
',
        'markdown' => '# Contact me

Feel free to contact me if you are interested.'
    ]
];
