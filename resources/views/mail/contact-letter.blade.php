<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Письмо</title>
</head>

<body>
  <div style="padding-left: 1.5rem; padding-right: 1.5rem;">
    <h3 style="font-size: 1.125rem; font-weight: 500; line-height: 1.5rem; color: #1a202c;">
      Письмо с <a href="https://evgeniypp.ru">evgeniyPP.ru</a>
    </h3>
  </div>
  <div>
    <dl>
      <div style="padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1.25rem; padding-bottom: 1.25rem;">
        <dt style="font-size: .875rem; font-weight: 500; line-height: 1.25rem; color: #a0aec0; margin-bottom: 0.5rem;">
          Имя:
        </dt>
        <dd style="font-size: .875rem; line-height: 1.25rem; color: #1a202c;">
          {{ $name }}
        </dd>
      </div>
      <div style="padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1.25rem; padding-bottom: 1.25rem;">
        <dt style="font-size: .875rem; font-weight: 500; line-height: 1.25rem; color: #a0aec0; margin-bottom: 0.5rem;">
          Контакты:
        </dt>
        <dd style="font-size: .875rem; line-height: 1.25rem; color: #1a202c;">
          {{ $contact }}
        </dd>
      </div>
      <div style="padding-left: 1.5rem; padding-right: 1.5rem; padding-top: 1.25rem; padding-bottom: 1.25rem;">
        <dt style="font-size: .875rem; font-weight: 500; line-height: 1.25rem; color: #a0aec0; margin-bottom: 0.5rem;">
          Сообщение:
        </dt>
        <dd style="font-size: .875rem; line-height: 1.25rem; color: #1a202c;">
          {!! $text !!}
        </dd>
      </div>
    </dl>
  </div>
</body>

</html>
