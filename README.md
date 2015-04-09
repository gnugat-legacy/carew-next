# Carew - next

This Carew plugin adds two new functions:

* `next_document()`
* `previous_document()`

With these, you'll be able to automatically have links pointing to the next and previous pages:

```
{% block content_main %}
    {{ carew.document.body|raw }}

    <ul>
        {% set next = next_document(carew.posts, carew.document) %}
        {% if next %}
        <li>Next: <a href="{{ render_document_path(next) }}">{{ next.title }}</a></li>
        {% endif %}

        {% set previous = previous_document(carew.posts, carew.document) %}
        {% if previous %}
        <li>Previous: <a href="{{ render_document_path(previous) }}">{{ previous.title }}</a></li>
        {% endif %}
    <ul>
{% endblock %}
```

## Installation

Use [Composer](http://getcomposer.org/):

    composer require "gnugat/carew-next:~1.0"

Then register the plugin:

```
engine:
    extensions:
        - Gnugat\CarewNext\NextExtension
```

## Further documentation

You can see the current and past versions using one of the following:

* the `git tag` command
* the [releases page on Github](https://github.com/gnugat/redaktilo/releases)
* the file listing the [changes between versions](CHANGELOG.md)

You can find more documentation at the following links:

* [copyright and MIT license](LICENSE)
* [versioning and branching models](VERSIONING.md)
* [contribution instructions](CONTRIBUTING.md)
