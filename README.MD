**Взято от сюда sandervanhooft/laravel-blade-readable-numbers**
**Подходит для Laravel 5**

В config/app.php
добавить ```Gimtonic\ReadableNumbers\ReadableNumbersServiceProvider::class,```

Использовать так в blade
```
@readable_int(123456) // outputs 123K
@readable_int(123456789) // outputs 123M
@readable_int(123456789012) // outputs 123B
@readable_int(123456789012345) // outputs 123T
```