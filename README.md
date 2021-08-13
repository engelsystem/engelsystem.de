# [engelsystem.de](https://engelsystem.de)
## Setup
```bash
docker run -it --rm -v "$PWD":/app composer install
```

## Configuration
An optional `config-local.json` will be merged if available.

To add a header for an event:
```json
{
  "pages": {
    "/": {
      "content": [
        {
          "size": 12,
          "centered": true,
          "cta": true,
          "image": "/img/angel.svg",
          "content": "Hilf uns bei $veranstaltung und werde Engel!",
          "button": {
            "text": "$veranstaltung Engelsystem",
            "link": "https://engelsystem.de/$veranstaltung",
            "angel": true
          }
        }
      ]
    }
  }
}
```

Include a file from the content directory:
```json
{
  "pages": {
    "/legal": {
      "language": "en",
      "languages": { "de": "/impressum" },
      "title": "Legal",
      "content": [
        {
          "title": "Legal",
          "file": "legal.html"
        }
      ]
    }
  }
}
```

External navigation link:
```json
{
  "links": {
    "de": {
      "Foo": "https://example.com/bar"
    }
  }
}
```

## Dev
```bash
docker run -it --rm \
  -v "$PWD":/var/www/ \
  -v "$PWD/public":/var/www/html/ \
  --name engelsystem.de \
  php:apache \
  sh -c 'a2enmod rewrite && docker-php-entrypoint apache2-foreground'
```
